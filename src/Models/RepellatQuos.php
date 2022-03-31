<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class RepellatQuos extends DataObject
{
    use ModelTrait;
    private static $table_name = 'RepellatQuos';

    private static $has_one = [
        "EumVel" => EumVel::class
    ];

    private static $has_many = [
        "EumVels" => EumVel::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EumVelManys" => EumVel::class
    ];

    private static $extensions = [
        
    ];
}