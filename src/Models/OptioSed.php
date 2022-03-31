<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class OptioSed extends DataObject
{
    use ModelTrait;
    private static $table_name = 'OptioSed';

    private static $has_one = [
        "NonTenetur" => NonTenetur::class
    ];

    private static $has_many = [
        "NonTeneturs" => NonTenetur::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "NonTeneturManys" => NonTenetur::class
    ];

    private static $extensions = [
        
    ];
}