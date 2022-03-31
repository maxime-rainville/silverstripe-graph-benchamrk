<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AtIn extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AtIn';

    private static $has_one = [
        "AutemPerferendis" => AutemPerferendis::class
    ];

    private static $has_many = [
        "AutemPerferendiss" => AutemPerferendis::class
    ];

    private static $many_many = [
        "AutemPerferendisManys" => AutemPerferendis::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}