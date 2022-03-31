<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuiNon extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuiNon';

    private static $has_one = [
        "SaepeVoluptatibus" => SaepeVoluptatibus::class
    ];

    private static $has_many = [
        "SaepeVoluptatibuss" => SaepeVoluptatibus::class
    ];

    private static $many_many = [
        "SaepeVoluptatibusManys" => SaepeVoluptatibus::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}