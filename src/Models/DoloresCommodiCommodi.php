<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DoloresCommodiCommodi extends DataObject
{
    use ModelTrait;
    private static $table_name = 'DoloresCommodiCommodi';

    private static $has_one = [
        "NostrumIllumSuscipit" => NostrumIllumSuscipit::class
    ];

    private static $has_many = [
        "NostrumIllumSuscipits" => NostrumIllumSuscipit::class
    ];

    private static $many_many = [
        "NostrumIllumSuscipitManys" => NostrumIllumSuscipit::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}