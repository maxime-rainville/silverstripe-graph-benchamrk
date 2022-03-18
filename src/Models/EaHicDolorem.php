<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EaHicDolorem extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EaHicDolorem';

    private static $has_one = [
        "DelenitiVoluptatumNemo" => DelenitiVoluptatumNemo::class
    ];

    private static $has_many = [
        "DelenitiVoluptatumNemos" => DelenitiVoluptatumNemo::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "DelenitiVoluptatumNemoManys" => DelenitiVoluptatumNemo::class
    ];

    private static $extensions = [
        
    ];
}