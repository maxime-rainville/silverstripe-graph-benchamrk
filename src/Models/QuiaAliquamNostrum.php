<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuiaAliquamNostrum extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuiaAliquamNostrum';

    private static $has_one = [
        "SaepeRerumAtque" => SaepeRerumAtque::class
    ];

    private static $has_many = [
        "SaepeRerumAtques" => SaepeRerumAtque::class
    ];

    private static $many_many = [
        "SaepeRerumAtqueManys" => SaepeRerumAtque::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}