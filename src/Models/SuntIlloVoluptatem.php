<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class SuntIlloVoluptatem extends DataObject
{
    use ModelTrait;
    private static $table_name = 'SuntIlloVoluptatem';

    private static $has_one = [
        "ArchitectoMinusQuod" => ArchitectoMinusQuod::class
    ];

    private static $has_many = [
        "ArchitectoMinusQuods" => ArchitectoMinusQuod::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "ArchitectoMinusQuodManys" => ArchitectoMinusQuod::class
    ];

    private static $extensions = [
        
    ];
}