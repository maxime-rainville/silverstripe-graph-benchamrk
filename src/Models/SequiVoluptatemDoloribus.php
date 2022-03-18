<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class SequiVoluptatemDoloribus extends DataObject
{
    use ModelTrait;
    private static $table_name = 'SequiVoluptatemDoloribus';

    private static $has_one = [
        "EnimSintHarum" => EnimSintHarum::class
    ];

    private static $has_many = [
        "EnimSintHarums" => EnimSintHarum::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EnimSintHarumManys" => EnimSintHarum::class
    ];

    private static $extensions = [
        Versioned::class . '.versioned',
    ];
}