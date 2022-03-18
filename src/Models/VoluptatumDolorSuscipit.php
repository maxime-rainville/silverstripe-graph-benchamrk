<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VoluptatumDolorSuscipit extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VoluptatumDolorSuscipit';

    private static $has_one = [
        "ImpeditVeroPraesentium" => ImpeditVeroPraesentium::class
    ];

    private static $has_many = [
        "ImpeditVeroPraesentiums" => ImpeditVeroPraesentium::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "ImpeditVeroPraesentiumManys" => ImpeditVeroPraesentium::class
    ];

    private static $extensions = [
        Versioned::class . '.versioned',
    ];
}