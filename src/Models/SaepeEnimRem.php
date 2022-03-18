<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class SaepeEnimRem extends DataObject
{
    use ModelTrait;
    private static $table_name = 'SaepeEnimRem';

    private static $has_one = [
        "SuscipitUtQui" => SuscipitUtQui::class
    ];

    private static $has_many = [
        "SuscipitUtQuis" => SuscipitUtQui::class
    ];

    private static $many_many = [
        "SuscipitUtQuiManys" => SuscipitUtQui::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}