<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DoloremDistinctioAsperiores extends DataObject
{
    use ModelTrait;
    private static $table_name = 'DoloremDistinctioAsperiores';

    private static $has_one = [
        "ExpeditaOdioAssumenda" => ExpeditaOdioAssumenda::class
    ];

    private static $has_many = [
        "ExpeditaOdioAssumendas" => ExpeditaOdioAssumenda::class
    ];

    private static $many_many = [
        "ExpeditaOdioAssumendaManys" => ExpeditaOdioAssumenda::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}