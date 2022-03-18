<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class RepudiandaePariaturItaque extends DataObject
{
    use ModelTrait;
    private static $table_name = 'RepudiandaePariaturItaque';

    private static $has_one = [
        "AutRecusandaeUnde" => AutRecusandaeUnde::class
    ];

    private static $has_many = [
        "AutRecusandaeUndes" => AutRecusandaeUnde::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "AutRecusandaeUndeManys" => AutRecusandaeUnde::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}