<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DoloremVoluptatem extends DataObject
{
    use ModelTrait;
    private static $table_name = 'DoloremVoluptatem';

    private static $has_one = [
        "RepudiandaeRepudiandae" => RepudiandaeRepudiandae::class
    ];

    private static $has_many = [
        "RepudiandaeRepudiandaes" => RepudiandaeRepudiandae::class
    ];

    private static $many_many = [
        "RepudiandaeRepudiandaeManys" => RepudiandaeRepudiandae::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}