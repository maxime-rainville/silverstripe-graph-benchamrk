<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AbVoluptatemSed extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AbVoluptatemSed';

    private static $has_one = [
        "CommodiEstPerferendis" => CommodiEstPerferendis::class
    ];

    private static $has_many = [
        "CommodiEstPerferendiss" => CommodiEstPerferendis::class
    ];

    private static $many_many = [
        "CommodiEstPerferendisManys" => CommodiEstPerferendis::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}