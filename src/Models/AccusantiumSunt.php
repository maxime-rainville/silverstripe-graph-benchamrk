<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AccusantiumSunt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AccusantiumSunt';

    private static $has_one = [
        "ImpeditError" => ImpeditError::class
    ];

    private static $has_many = [
        "ImpeditErrors" => ImpeditError::class
    ];

    private static $many_many = [
        "ImpeditErrorManys" => ImpeditError::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}