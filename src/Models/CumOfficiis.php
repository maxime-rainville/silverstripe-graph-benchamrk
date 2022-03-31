<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class CumOfficiis extends DataObject
{
    use ModelTrait;
    private static $table_name = 'CumOfficiis';

    private static $has_one = [
        "VoluptatesQuae" => VoluptatesQuae::class
    ];

    private static $has_many = [
        "VoluptatesQuaes" => VoluptatesQuae::class
    ];

    private static $many_many = [
        "VoluptatesQuaeManys" => VoluptatesQuae::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}