<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class MaximeVoluptatemCupiditate extends DataObject
{
    use ModelTrait;
    private static $table_name = 'MaximeVoluptatemCupiditate';

    private static $has_one = [
        "QuiExcepturiEt" => QuiExcepturiEt::class
    ];

    private static $has_many = [
        "QuiExcepturiEts" => QuiExcepturiEt::class
    ];

    private static $many_many = [
        "QuiExcepturiEtManys" => QuiExcepturiEt::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class . '.versioned',
    ];
}