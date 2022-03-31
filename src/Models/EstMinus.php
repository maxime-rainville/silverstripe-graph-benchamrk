<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EstMinus extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EstMinus';

    private static $has_one = [
        "InAperiam" => InAperiam::class
    ];

    private static $has_many = [
        "InAperiams" => InAperiam::class
    ];

    private static $many_many = [
        "InAperiamManys" => InAperiam::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}