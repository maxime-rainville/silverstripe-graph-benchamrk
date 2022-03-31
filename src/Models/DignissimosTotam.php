<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DignissimosTotam extends DataObject
{
    use ModelTrait;
    private static $table_name = 'DignissimosTotam';

    private static $has_one = [
        "QuoNobis" => QuoNobis::class
    ];

    private static $has_many = [
        "QuoNobiss" => QuoNobis::class
    ];

    private static $many_many = [
        "QuoNobisManys" => QuoNobis::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}