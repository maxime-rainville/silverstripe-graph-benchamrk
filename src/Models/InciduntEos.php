<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class InciduntEos extends DataObject
{
    use ModelTrait;
    private static $table_name = 'InciduntEos';

    private static $has_one = [
        "PerferendisQui" => PerferendisQui::class
    ];

    private static $has_many = [
        "PerferendisQuis" => PerferendisQui::class
    ];

    private static $many_many = [
        "PerferendisQuiManys" => PerferendisQui::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}