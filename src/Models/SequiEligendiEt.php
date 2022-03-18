<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class SequiEligendiEt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'SequiEligendiEt';

    private static $has_one = [
        "IpsaVelitFugit" => IpsaVelitFugit::class
    ];

    private static $has_many = [
        "IpsaVelitFugits" => IpsaVelitFugit::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "IpsaVelitFugitManys" => IpsaVelitFugit::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}