<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class TemporibusEtTempore extends DataObject
{
    use ModelTrait;
    private static $table_name = 'TemporibusEtTempore';

    private static $has_one = [
        "UndeQuosDolore" => UndeQuosDolore::class
    ];

    private static $has_many = [
        "UndeQuosDolores" => UndeQuosDolore::class
    ];

    private static $many_many = [
        "UndeQuosDoloreManys" => UndeQuosDolore::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}