<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VelitVoluptatibusOptio extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VelitVoluptatibusOptio';

    private static $has_one = [
        "EaVoluptatesAt" => EaVoluptatesAt::class
    ];

    private static $has_many = [
        "EaVoluptatesAts" => EaVoluptatesAt::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EaVoluptatesAtManys" => EaVoluptatesAt::class
    ];

    private static $extensions = [
        
    ];
}