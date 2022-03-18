<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EiusDoloremQuod extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EiusDoloremQuod';

    private static $has_one = [
        "QuisquamVitaeQuod" => QuisquamVitaeQuod::class
    ];

    private static $has_many = [
        "QuisquamVitaeQuods" => QuisquamVitaeQuod::class
    ];

    private static $many_many = [
        "QuisquamVitaeQuodManys" => QuisquamVitaeQuod::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}