<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VoluptatumInDebitis extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VoluptatumInDebitis';

    private static $has_one = [
        "EaVoluptatemCorrupti" => EaVoluptatemCorrupti::class
    ];

    private static $has_many = [
        "EaVoluptatemCorruptis" => EaVoluptatemCorrupti::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EaVoluptatemCorruptiManys" => EaVoluptatemCorrupti::class
    ];

    private static $extensions = [
        
    ];
}