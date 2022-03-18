<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EtSuscipitExercitationem extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EtSuscipitExercitationem';

    private static $has_one = [
        "SuscipitLiberoPerferendis" => SuscipitLiberoPerferendis::class
    ];

    private static $has_many = [
        "SuscipitLiberoPerferendiss" => SuscipitLiberoPerferendis::class
    ];

    private static $many_many = [
        "SuscipitLiberoPerferendisManys" => SuscipitLiberoPerferendis::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}