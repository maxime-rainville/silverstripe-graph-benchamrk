<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DolorEtEsse extends DataObject
{
    use ModelTrait;
    private static $table_name = 'DolorEtEsse';

    private static $has_one = [
        "NamNesciuntTemporibus" => NamNesciuntTemporibus::class
    ];

    private static $has_many = [
        "NamNesciuntTemporibuss" => NamNesciuntTemporibus::class
    ];

    private static $many_many = [
        "NamNesciuntTemporibusManys" => NamNesciuntTemporibus::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}