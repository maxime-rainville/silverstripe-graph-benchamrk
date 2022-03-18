<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class CulpaVoluptatemDistinctio extends DataObject
{
    use ModelTrait;
    private static $table_name = 'CulpaVoluptatemDistinctio';

    private static $has_one = [
        "PossimusHarumFuga" => PossimusHarumFuga::class
    ];

    private static $has_many = [
        "PossimusHarumFugas" => PossimusHarumFuga::class
    ];

    private static $many_many = [
        "PossimusHarumFugaManys" => PossimusHarumFuga::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class . '.versioned',
    ];
}