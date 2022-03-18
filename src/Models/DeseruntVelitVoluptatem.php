<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DeseruntVelitVoluptatem extends DataObject
{
    use ModelTrait;
    private static $table_name = 'DeseruntVelitVoluptatem';

    private static $has_one = [
        "AutemEnimEst" => AutemEnimEst::class
    ];

    private static $has_many = [
        "AutemEnimEsts" => AutemEnimEst::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "AutemEnimEstManys" => AutemEnimEst::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}