<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AliquidDoloremqueExplicabo extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AliquidDoloremqueExplicabo';

    private static $has_one = [
        "LaborumCulpaLaboriosam" => LaborumCulpaLaboriosam::class
    ];

    private static $has_many = [
        "LaborumCulpaLaboriosams" => LaborumCulpaLaboriosam::class
    ];

    private static $many_many = [
        "LaborumCulpaLaboriosamManys" => LaborumCulpaLaboriosam::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}