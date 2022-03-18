<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class UtVoluptasEx extends DataObject
{
    use ModelTrait;
    private static $table_name = 'UtVoluptasEx';

    private static $has_one = [
        "QuosImpeditFugiat" => QuosImpeditFugiat::class
    ];

    private static $has_many = [
        "QuosImpeditFugiats" => QuosImpeditFugiat::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "QuosImpeditFugiatManys" => QuosImpeditFugiat::class
    ];

    private static $extensions = [
        
    ];
}