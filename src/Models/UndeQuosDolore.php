<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class UndeQuosDolore extends DataObject
{
    use ModelTrait;
    private static $table_name = 'UndeQuosDolore';

    private static $has_one = [
        "TemporibusEtTempore" => TemporibusEtTempore::class
    ];

    private static $has_many = [
        "TemporibusEtTempores" => TemporibusEtTempore::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "TemporibusEtTemporeManys" => TemporibusEtTempore::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}