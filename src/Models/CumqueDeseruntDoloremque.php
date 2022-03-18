<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class CumqueDeseruntDoloremque extends DataObject
{
    use ModelTrait;
    private static $table_name = 'CumqueDeseruntDoloremque';

    private static $has_one = [
        "QuoDoloresDolores" => QuoDoloresDolores::class
    ];

    private static $has_many = [
        "QuoDoloresDoloress" => QuoDoloresDolores::class
    ];

    private static $many_many = [
        "QuoDoloresDoloresManys" => QuoDoloresDolores::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}