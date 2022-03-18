<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuosSequiCorrupti extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuosSequiCorrupti';

    private static $has_one = [
        "UndeNatusEnim" => UndeNatusEnim::class
    ];

    private static $has_many = [
        "UndeNatusEnims" => UndeNatusEnim::class
    ];

    private static $many_many = [
        "UndeNatusEnimManys" => UndeNatusEnim::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}