<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class TotamReiciendis extends DataObject
{
    use ModelTrait;
    private static $table_name = 'TotamReiciendis';

    private static $has_one = [
        "QuisquamConsequatur" => QuisquamConsequatur::class
    ];

    private static $has_many = [
        "QuisquamConsequaturs" => QuisquamConsequatur::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "QuisquamConsequaturManys" => QuisquamConsequatur::class
    ];

    private static $extensions = [
        
    ];
}