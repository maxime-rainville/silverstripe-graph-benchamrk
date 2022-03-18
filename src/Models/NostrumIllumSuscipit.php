<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class NostrumIllumSuscipit extends DataObject
{
    use ModelTrait;
    private static $table_name = 'NostrumIllumSuscipit';

    private static $has_one = [
        "DoloresCommodiCommodi" => DoloresCommodiCommodi::class
    ];

    private static $has_many = [
        "DoloresCommodiCommodis" => DoloresCommodiCommodi::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "DoloresCommodiCommodiManys" => DoloresCommodiCommodi::class
    ];

    private static $extensions = [
        Versioned::class . '.versioned',
    ];
}