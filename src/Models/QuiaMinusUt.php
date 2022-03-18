<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuiaMinusUt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuiaMinusUt';

    private static $has_one = [
        "IpsumEvenietQuo" => IpsumEvenietQuo::class
    ];

    private static $has_many = [
        "IpsumEvenietQuos" => IpsumEvenietQuo::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "IpsumEvenietQuoManys" => IpsumEvenietQuo::class
    ];

    private static $extensions = [
        Versioned::class . '.versioned',
    ];
}