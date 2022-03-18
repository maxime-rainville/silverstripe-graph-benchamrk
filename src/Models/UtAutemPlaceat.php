<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class UtAutemPlaceat extends DataObject
{
    use ModelTrait;
    private static $table_name = 'UtAutemPlaceat';

    private static $has_one = [
        "VoluptasVoluptasEa" => VoluptasVoluptasEa::class
    ];

    private static $has_many = [
        "VoluptasVoluptasEas" => VoluptasVoluptasEa::class
    ];

    private static $many_many = [
        "VoluptasVoluptasEaManys" => VoluptasVoluptasEa::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}