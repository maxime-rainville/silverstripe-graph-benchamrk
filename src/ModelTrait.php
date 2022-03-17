<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark;

use Faker\Factory;
use SilverStripe\Core\Injector\Injector;
use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

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

    private static $extensions = [
        Versioned::class,
    ];


    public function requireDefaultRecords()
    {
        $faker = Factory::create();

        $count = DataObject::get(static::class)->count();

        for ($i = $count; $i < 5; $i++) {

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
                $obj->{$name . 'ID'} = $faker->numberBetween(1, 5);
            }

            $obj->write();
            $obj->publishSingle();
        }


    }
}


