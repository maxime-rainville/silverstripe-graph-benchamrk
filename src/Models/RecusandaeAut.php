<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class RecusandaeAut extends DataObject
{
    use ModelTrait;
    private static $table_name = 'RecusandaeAut';

    private static $has_one = [
        "SolutaSequi" => SolutaSequi::class
    ];

    private static $has_many = [
        "SolutaSequis" => SolutaSequi::class
    ];

    private static $many_many = [
        "SolutaSequiManys" => SolutaSequi::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}