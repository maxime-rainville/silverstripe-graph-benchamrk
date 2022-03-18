<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EtEstOmnis extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EtEstOmnis';

    private static $has_one = [
        "VeroAsperioresAliquid" => VeroAsperioresAliquid::class
    ];

    private static $has_many = [
        "VeroAsperioresAliquids" => VeroAsperioresAliquid::class
    ];

    private static $many_many = [
        "VeroAsperioresAliquidManys" => VeroAsperioresAliquid::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}