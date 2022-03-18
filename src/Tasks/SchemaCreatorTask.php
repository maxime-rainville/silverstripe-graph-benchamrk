<?php
namespace MaximeRainville\SilverStripeGraphQLBenchmark\Tasks;

use SilverStripe\Dev\BuildTask;
use Faker\Factory;
use SilverStripe\Control\HTTPRequest;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder\Finder;
use SilverStripe\Core\Manifest\ModuleLoader;
use Symfony\Component\Filesystem\Exception\IOException;

/**
 * This task creates dummy data objects and auto-generates GraphQL v4 schema from there.
 */
class SchemaCreatorTask extends BuildTask
{

    /**
     * This controls what percentage of our DataObjects will be versioned.
     * - `unversioned` is the percentage of DO that will be unversioned,
     * - `versioned` is the percentage of DO that will be versioned with stages,
     * - whatever is left will be the percentage of DO that will be versioned without stages.
     * @config
     */
    private static $versioned_ratios = [
        'unversioned' => 45,
        'versioned' => 45,
    ];

    /**
     * Our generated DataObject are place in groups. A DataObject will have an one has_one,
     * one has_many and one many_many/belongs_many_many relation to all the other DataObjects in its group.
     *
     * The bigger this number is, the more your objects will have relations.
     *
     * @config
     */
    private static $siblings_per_group = 2;

    /**
     * A list of GraphQL Schemas to define. The key will be used for your
     * schema key. The value will map to the total number of DataObjects to
     * create. Each schema can be access at `/schema-key/graphql`.
     *
     * DataObjects will be reuse across schemas. A query that works against a
     * smaller schema will also work against the bigger ones.
     *
     * @config
     */
    private static $schemas = [
        'tiny' => 5,
        'small' => 10,
        'medium' => 40,
        'big' => 100,
        'verybig' => 250,
        'gigantic' => 500,
    ];

    /**
     * @var \Faker\Factory
     */
    protected $faker;

    /**
     * @var Filesystem
     */
    protected $fs;

    /**
     * @var Finder
     */
    protected $finder;

    public function __construct()
    {
        parent::__construct();
        $this->fs = new Filesystem();
        $this->faker = Factory::create();
        $this->finder = new Finder();
    }

    /**
     * @param HTTPRequest $request
     */
    public function run($request)
    {
        // Find the biggest schema with the biggest number of DataObjects
        $count = max(self::config()->get('schemas'));
        $module = ModuleLoader::getModule('maxime-rainville/silverstripe-graphql-benchmark');
        $modulePath = $module->getPath();

        // Create all our siblings and split them into groups
        $siblingGroups = $this->getSiblingGroups($count);

        $this->buildYml($modulePath);

        foreach ($siblingGroups as $siblings) {
            $this->buildPhp($siblings, $modulePath);
        }
        $this->buildSchemas($siblingGroups, $modulePath);
    }

    /**
     * Create a bunch of DataObject names and split them into groups
     */
    private function getSiblingGroups(int $count): array
    {
        $siblings = $this->getSiblings($count);
        $siblingsPerGroup = self::config()->get('siblings_per_group');

        return array_reduce($siblings, function ($carry, $sibling) use ($siblingsPerGroup) {
            $index = sizeof($carry) - 1;
            if (sizeof($carry[$index]) >= $siblingsPerGroup) {
                $carry[] = [];
                $index++;
            }
            $carry[$index][] = $sibling;
            return $carry;
        }, [[]]);
    }

    /**
     * Create a single list of unique DataObject names and make sure they are unique
     */
    private function getSiblings(int $count): array
    {
        $siblings = [];
        // We keep generating names and removing duplicates until we have reach the required number
        while (sizeof($siblings) < $count) {
            $siblings[] = $this->generateClassName();
            $siblings = array_unique($siblings);
        }
        return $siblings;
    }

    /**
     * Generate a DataObject name
     */
    private function generateClassName(): string
    {
        // We concatenate 3 fake words to generate a UpperCamelCase name
        return ucfirst($this->faker->word) . ucfirst($this->faker->word) . ucfirst($this->faker->word);
    }

    /**
     * Generate PHP classes for the providing siblings
     */
    private function buildPhp(array $siblings, string $modulePath) {
        $testPageDir = $modulePath . '/src/Models';

        // Make sure our target folder exists
        if (!$this->fs->exists($testPageDir)) {
            throw new \RuntimeException("Test page directory $testPageDir does not exist!");
        }

        foreach ($siblings as $sibling) {
            $code = $this->generateClassCode($sibling, $siblings);
            $filePath = sprintf('%s/%s.php', $testPageDir, $sibling);
            try {
                $this->fs->dumpFile($filePath, $code);
            } catch (IOException $e) {
                echo "Could not write to file $filePath. Got error: {$e->getMessage()}\n";
                die();
            }
            echo "Created $sibling DataObject\n";
        }
    }

    /**
     * Generate the PHP code for a single DataObject
     */
    private function generateClassCode(string $className, array $siblings): string
    {
        $self = static::class;

        // Remove the class we are generating from the sibling group
        // (We don't want any self referencial relations)
        $siblings = array_diff($siblings, [$className]);

        $hasones = implode(
            ",\n",
            array_map(function ($sibling) {
                return sprintf('        "%s" => %s::class', $sibling, $sibling);
            }, $siblings)
        );
        $hasmanys = implode(
            ",\n",
            array_map(function ($sibling) {
                return sprintf('        "%s" => %s::class', $sibling . 's', $sibling);
            }, $siblings)
        );

        // Build our many_many/belong_many_many relations
        // We'll use strcmp to compare the current class to the the sibling.
        // The end that comes first in the alphabet gets the many_many ...
        // The other side gets the belong_many_many
        $manymanys = implode(
            ",\n",
            array_map(
                function ($sibling) {
                return sprintf('        "%s" => %s::class', $sibling . 'Manys', $sibling);
                },
                array_filter(
                    $siblings,
                    function ($sibling) use ($className) {
                        return strcmp($sibling, $className) > 0;
                    }
                )
            ),
        );
        $belongsmanymany = implode(
            ",\n",
            array_map(
                function ($sibling) {
                return sprintf('        "%s" => %s::class', $sibling . 'Manys', $sibling);
                },
                array_filter(
                    $siblings,
                    function ($sibling) use ($className) {
                        return strcmp($sibling, $className) < 0;
                    }
                )
            ),
        );

        // We want a mixed of versioned, non-versioned and versioned unstage objects
        $rand = rand(0, 99);
        $ratios = self::config()->get('versioned_ratios');
        if ($rand > $ratios['unversioned'] + $ratios['versioned']) {
            $extensions = "Versioned::class . '.versioned',";
        } elseif($rand > $ratios['unversioned']) {
            $extensions = "Versioned::class,";
        } else {
            $extensions = '';
        }

        $code = <<<PHP
<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by $self
 */
class $className extends DataObject
{
    use ModelTrait;
    private static \$table_name = '$className';

    private static \$has_one = [
$hasones
    ];

    private static \$has_many = [
$hasmanys
    ];

    private static \$many_many = [
$manymanys
    ];

    private static \$belongs_many_many = [
$belongsmanymany
    ];

    private static \$extensions = [
        $extensions
    ];
}
PHP;
        return $code;
    }

    /**
     * Generate the config for our schema
     */
    private function buildYml(string $modulePath): void
    {
        // Make sure we don't have a pre-existing schema
        $configPath = $modulePath . '/_config/graphql.yml';
        if ($this->fs->exists($configPath)) {
            throw new \RuntimeException("$configPath already exists!");
        }

        $schemas = self::config()->get('schemas');
        $injectorDef = '';
        $directorRules = '';
        $schemaSrc = '';

        foreach ($schemas as $schemaKey => $size) {
            $injectorDef .= <<<YML
  SilverStripe\\GraphQL\\Schema\\Schema.$schemaKey:
    class: SilverStripe\\GraphQL\\Schema\\Schema
    constructor:
      schemaKey: $schemaKey
  SilverStripe\\GraphQL\\Controller.$schemaKey:
    class: SilverStripe\\GraphQL\\Controller
    constructor:
      schema: $schemaKey

YML;
            $directorRules .= "    '$schemaKey/graphql': '%\$SilverStripe\\GraphQL\\Controller.$schemaKey'\n";
            $schemaSrc .= <<<YML
    $schemaKey:
      src:
        - 'maxime-rainville/silverstripe-graphql-benchmark: _graphql/$schemaKey'

YML;
        }

        $ymlCode = <<<YML
---
Name: graphql-benchmark
After: '#graphqlconfig'
Only:
    classexists: 'SilverStripe\GraphQL\Schema\Schema'
---

SilverStripe\Core\Injector\Injector:
$injectorDef

SilverStripe\Control\Director:
  rules:
$directorRules
SilverStripe\GraphQL\Schema\Schema:
  schemas:
$schemaSrc

YML;
        try {
            $this->fs->dumpFile($configPath, $ymlCode);
        } catch (IOException $e) {
            echo "Could not write to file $configPath. Got error: {$e->getMessage()}\n";
            die();
        }
    }

    /**
     *
     */
    private function buildSchemas(array $siblingGroups, string $modulePath): void
    {
        $configPath = $modulePath . '/_graphql/';
        if (!$this->fs->exists($configPath)) {
            throw new \RuntimeException("$configPath does not exist!");
        }

        $schemas = self::config()->get('schemas');
        foreach ($schemas as $schemaKey => $size) {
            try {
                $ymlCode = "models:\n";
                foreach ($siblingGroups as $siblings) {
                    $ymlCode .= $this->buildOneSchema($siblings);
                }

                $schemaPath = $configPath . DIRECTORY_SEPARATOR . $schemaKey;
                $this->fs->mkdir($schemaPath);
                $this->fs->dumpFile($schemaPath . DIRECTORY_SEPARATOR . 'schema.yml', $ymlCode);
            } catch (IOException $e) {
                echo "Could not write to file $configPath. Got error: {$e->getMessage()}\n";
                die();
            }
        }
    }

    private function buildOneSchema(array $siblings)
    {
        $yml = "";

        foreach ($siblings as $sibling) {
            $yml .= <<<YML
  MaximeRainville\\SilverStripeGraphQLBenchmark\\Models\\$sibling:
    operations: '*'
    fields: '*'

YML;
        }
        return $yml;
    }

}
