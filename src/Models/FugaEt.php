<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class FugaEt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'FugaEt';

    private static $has_one = [
        "IsteExplicabo" => IsteExplicabo::class
    ];

    private static $has_many = [
        "IsteExplicabos" => IsteExplicabo::class
    ];

    private static $many_many = [
        "IsteExplicaboManys" => IsteExplicabo::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}