<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VoluptatemRationeNostrum extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VoluptatemRationeNostrum';

    private static $has_one = [
        "EtNonRepellat" => EtNonRepellat::class
    ];

    private static $has_many = [
        "EtNonRepellats" => EtNonRepellat::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EtNonRepellatManys" => EtNonRepellat::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}