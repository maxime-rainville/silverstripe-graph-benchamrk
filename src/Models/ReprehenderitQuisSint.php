<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class ReprehenderitQuisSint extends DataObject
{
    use ModelTrait;
    private static $table_name = 'ReprehenderitQuisSint';

    private static $has_one = [
        "QuiQuaeratTemporibus" => QuiQuaeratTemporibus::class
    ];

    private static $has_many = [
        "QuiQuaeratTemporibuss" => QuiQuaeratTemporibus::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "QuiQuaeratTemporibusManys" => QuiQuaeratTemporibus::class
    ];

    private static $extensions = [
        Versioned::class . '.versioned',
    ];
}