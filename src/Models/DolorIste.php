<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DolorIste extends DataObject
{
    use ModelTrait;
    private static $table_name = 'DolorIste';

    private static $has_one = [
        "VoluptatesQui" => VoluptatesQui::class
    ];

    private static $has_many = [
        "VoluptatesQuis" => VoluptatesQui::class
    ];

    private static $many_many = [
        "VoluptatesQuiManys" => VoluptatesQui::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}