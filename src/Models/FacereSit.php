<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class FacereSit extends DataObject
{
    use ModelTrait;
    private static $table_name = 'FacereSit';

    private static $has_one = [
        "PlaceatAperiam" => PlaceatAperiam::class
    ];

    private static $has_many = [
        "PlaceatAperiams" => PlaceatAperiam::class
    ];

    private static $many_many = [
        "PlaceatAperiamManys" => PlaceatAperiam::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}