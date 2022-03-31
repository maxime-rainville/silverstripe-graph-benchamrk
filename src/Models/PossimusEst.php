<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class PossimusEst extends DataObject
{
    use ModelTrait;
    private static $table_name = 'PossimusEst';

    private static $has_one = [
        "OmnisDeleniti" => OmnisDeleniti::class
    ];

    private static $has_many = [
        "OmnisDelenitis" => OmnisDeleniti::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "OmnisDelenitiManys" => OmnisDeleniti::class
    ];

    private static $extensions = [
        
    ];
}