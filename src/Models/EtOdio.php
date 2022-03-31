<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EtOdio extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EtOdio';

    private static $has_one = [
        "TeneturIncidunt" => TeneturIncidunt::class
    ];

    private static $has_many = [
        "TeneturIncidunts" => TeneturIncidunt::class
    ];

    private static $many_many = [
        "TeneturInciduntManys" => TeneturIncidunt::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}