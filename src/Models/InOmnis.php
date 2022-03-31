<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class InOmnis extends DataObject
{
    use ModelTrait;
    private static $table_name = 'InOmnis';

    private static $has_one = [
        "VeroAut" => VeroAut::class
    ];

    private static $has_many = [
        "VeroAuts" => VeroAut::class
    ];

    private static $many_many = [
        "VeroAutManys" => VeroAut::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}