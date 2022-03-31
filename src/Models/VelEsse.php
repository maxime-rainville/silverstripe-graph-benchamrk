<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VelEsse extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VelEsse';

    private static $has_one = [
        "VitaeEt" => VitaeEt::class
    ];

    private static $has_many = [
        "VitaeEts" => VitaeEt::class
    ];

    private static $many_many = [
        "VitaeEtManys" => VitaeEt::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}