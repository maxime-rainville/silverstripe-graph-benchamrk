<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class UtOfficiis extends DataObject
{
    use ModelTrait;
    private static $table_name = 'UtOfficiis';

    private static $has_one = [
        "IpsamEum" => IpsamEum::class
    ];

    private static $has_many = [
        "IpsamEums" => IpsamEum::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "IpsamEumManys" => IpsamEum::class
    ];

    private static $extensions = [
        
    ];
}