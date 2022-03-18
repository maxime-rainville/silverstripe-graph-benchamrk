<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class ConsequaturNihilQuo extends DataObject
{
    use ModelTrait;
    private static $table_name = 'ConsequaturNihilQuo';

    private static $has_one = [
        "EtSedDolorem" => EtSedDolorem::class
    ];

    private static $has_many = [
        "EtSedDolorems" => EtSedDolorem::class
    ];

    private static $many_many = [
        "EtSedDoloremManys" => EtSedDolorem::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class . '.versioned',
    ];
}