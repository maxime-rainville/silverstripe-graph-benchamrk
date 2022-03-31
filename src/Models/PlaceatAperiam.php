<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class PlaceatAperiam extends DataObject
{
    use ModelTrait;
    private static $table_name = 'PlaceatAperiam';

    private static $has_one = [
        "FacereSit" => FacereSit::class
    ];

    private static $has_many = [
        "FacereSits" => FacereSit::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "FacereSitManys" => FacereSit::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}