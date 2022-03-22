<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark;

use Faker\Factory;
use SilverStripe\Core\Injector\Injector;
use SilverStripe\ORM\DataObject;
use SilverStripe\ORM\ManyManyList;

/**
 * Trait applied to all our generated DataObject. It defines a bunch of properties and
 * some default records.
 */
trait ModelTrait {

    private static $db = [
        'AStringValue' => 'Varchar',
        'Numeric' => 'Int',
        'TrueOrFalse' => 'Boolean',
        'MyNovel' => 'Text',
        'MyNovelWithFormattedContent' => 'HTMLText',
        'ShowMeTheMoney' => 'Money',
        'ListOfThings' => 'Enum("USD,EUR,GBP,AUD,CAD,CHF,CNY,DKK,HKD,JPY,NZD,PLN,RUB,SEK,SGD,THB,ZAR")',
        'YourTimeWillCome' => 'Datetime',
        'SplintingNumber' => 'Decimal',
        'InTheYearOfThyLord' => 'Year',
    ];

    public function requireDefaultRecords()
    {
        $faker = Factory::create();

        // If there's some pre-existing data, don't recreate it
        if (DataObject::get(static::class)->count() > 0) {
            return;
        }

        $recordPerDataObject = 1000;

        // We'll create 5 records for each DataObject class
        for ($i = 0; $i < $recordPerDataObject; $i++) {
            /** @var DataObject $obj */
            $obj = Injector::inst()->create(static::class);

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

            foreach (static::$has_one as $name => $class) {
                // It doesn't matter if the other end of this relation does not
                // exist ... it will later
                $obj->{$name . 'ID'} = $faker->numberBetween(1, $recordPerDataObject);
            }

            $obj->write();

            // We loop over all our relations
            $manyManys = array_merge(static::$many_many,static::$belongs_many_many );
            foreach ($manyManys as $name => $class) {
                // If tho other DataObject haven't been created yet, we bail
                // The relationship will be created on the next pass
                if (DataObject::get($class)->count() === 0) {
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


