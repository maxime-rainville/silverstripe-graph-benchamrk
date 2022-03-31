<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class SaepeVoluptatibus extends DataObject
{
    use ModelTrait;
    private static $table_name = 'SaepeVoluptatibus';

    private static $has_one = [
        "QuiNon" => QuiNon::class
    ];

    private static $has_many = [
        "QuiNons" => QuiNon::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "QuiNonManys" => QuiNon::class
    ];

    private static $extensions = [
        
    ];
}