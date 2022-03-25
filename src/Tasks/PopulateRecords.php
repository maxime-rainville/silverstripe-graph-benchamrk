<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Tasks;

use Symbiote\QueuedJobs\Services\AbstractQueuedJob;
use SilverStripe\Core\ClassInfo;
use Faker\Factory;
use SilverStripe\Core\Injector\Injector;
use SilverStripe\ORM\DataObject;
use SilverStripe\ORM\ManyManyList;

/**
 * Class MyJob
 *
 * @property array $items
 * @property array $remaining
 */
class PopulateRecords extends AbstractQueuedJob
{

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return 'My awesome job';
    }

    public function setup(): void
    {
        $this->items = $this->findAllModels();
        $this->remaining = $this->items;

        // Set the total steps to the number of items we want to process
        $this->totalSteps = count($this->items);
    }

    public function process(): void
    {
        $remaining = $this->remaining;

        // check for trivial case
        if (count($remaining) === 0) {
            $this->isComplete = true;

            return;
        }

        $item = array_shift($remaining);

        // code that will process your item goes here
        $this->populate($item);

        $this->remaining = $remaining;

        // Updating current step tells the Queue runner that the job is progressing
        $this->currentStep += 1;

        // check for job completion
        if (count($remaining) > 0) {
            // Note that we do not process more than one item at a time
            // this makes the Queue runner save the job progress into DB
            // in case something goes wrong the job will be resumed from the last checkpoint
            return;
        }

        // Queue runner will mark this job as finished
        $this->isComplete = true;
    }

    private function findAllModels(): array
    {
        return array_filter(ClassInfo::allClasses(), function ($class) {
            return stripos($class, 'MaximeRainville\\SilverStripeGraphQLBenchmark\\Models') === 0;
        });
    }

    public function populate(string $mainclass)
    {
        echo "processing $mainclass\n";

        $faker = Factory::create();

        // If there's some pre-existing data, don't recreate it
        if (DataObject::get($mainclass)->count() > 0) {
            return;
        }

        $recordPerDataObject = 1000;

        // We'll create records for each DataObject class
        for ($i = 0; $i < $recordPerDataObject; $i++) {
            /** @var DataObject $obj */
            $obj = Injector::inst()->create($mainclass);

            $obj->AStringValue = $faker->sentence();
            $obj->Numeric = $faker->numberBetween(1, 100);
            $obj->TrueOrFalse = $faker->boolean();
            $obj->MyNovel = $faker->sentence();
            $obj->MyNovelWithFormattedContent = $faker->randomHtml();
            $obj->ShowMeTheMoney = [
                'Amount' => $faker->randomFloat(2, 1, 100),
                'Currency' => $faker->randomElement(['USD', 'EUR', 'GBP', 'AUD', 'CAD', 'CHF', 'CNY', 'DKK', 'HKD', 'JPY', 'NZD', 'PLN', 'RUB', 'SEK', 'SGD', 'THB', 'ZAR']),
            ];
            $obj->ListOfThings = $faker->randomElement(['USD', 'EUR', 'GBP', 'AUD', 'CAD', 'CHF', 'CNY', 'DKK', 'HKD', 'JPY', 'NZD', 'PLN', 'RUB', 'SEK', 'SGD', 'THB', 'ZAR']);
            $obj->YourTimeWillCome = $faker->dateTime()->format('Y-m-d H:i:s');
            $obj->SplintingNumber = $faker->randomFloat();
            $obj->InTheYearOfThyLord = $faker->year();

            foreach ($obj::config()->get('has_one') as $name => $class) {
                // It doesn't matter if the other end of this relation does not
                // exist ... it will later
                $obj->{$name . 'ID'} = $faker->numberBetween(1, $recordPerDataObject);
            }

            $obj->write();

            // We loop over all our relations
            $manyManys = array_merge($obj::config()->get('many_many'), $obj::config()->get('belongs_many_many'));
            foreach ($manyManys as $name => $class) {
                // If tho other DataObject haven't been created yet, we bail
                // The relationship will be created on the next pass
                if (!is_string($class) || DataObject::get($class)->count() === 0) {
                    continue;
                }


                // We add objects to our relations
                // We know they'll be `$recordPerDataObject` IDs
                // We give each ID a 50-50 chance of being added to the relation
                /** @var ManyManyList $rel */
                $rel = $obj->{$name}();
                for ($j = 1; $j <= $recordPerDataObject; $j++) {
                    if ($faker->boolean()) {
                        $rel->add($j);
                    }
                }
            }

            // Some of our objects might not be Versioned
            if ($obj->hasMethod('publishSingle')) {
                $obj->publishSingle();
            }
        }
    }
}
