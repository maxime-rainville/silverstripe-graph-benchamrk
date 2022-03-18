<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class MaioresRationeSoluta extends DataObject
{
    use ModelTrait;
    private static $table_name = 'MaioresRationeSoluta';

    private static $has_one = [
        "QuaeIustoNihil" => QuaeIustoNihil::class
    ];

    private static $has_many = [
        "QuaeIustoNihils" => QuaeIustoNihil::class
    ];

    private static $many_many = [
        "QuaeIustoNihilManys" => QuaeIustoNihil::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}