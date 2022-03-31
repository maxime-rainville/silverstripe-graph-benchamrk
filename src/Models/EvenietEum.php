<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EvenietEum extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EvenietEum';

    private static $has_one = [
        "VoluptatemAliquam" => VoluptatemAliquam::class
    ];

    private static $has_many = [
        "VoluptatemAliquams" => VoluptatemAliquam::class
    ];

    private static $many_many = [
        "VoluptatemAliquamManys" => VoluptatemAliquam::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}