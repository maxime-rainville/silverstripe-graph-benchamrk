<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class RerumHarumMagni extends DataObject
{
    use ModelTrait;
    private static $table_name = 'RerumHarumMagni';

    private static $has_one = [
        "SimiliqueAutVoluptatem" => SimiliqueAutVoluptatem::class
    ];

    private static $has_many = [
        "SimiliqueAutVoluptatems" => SimiliqueAutVoluptatem::class
    ];

    private static $many_many = [
        "SimiliqueAutVoluptatemManys" => SimiliqueAutVoluptatem::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}