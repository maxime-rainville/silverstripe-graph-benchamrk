<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class UtEstPerspiciatis extends DataObject
{
    use ModelTrait;
    private static $table_name = 'UtEstPerspiciatis';

    private static $has_one = [
        "InventoreIpsamRecusandae" => InventoreIpsamRecusandae::class
    ];

    private static $has_many = [
        "InventoreIpsamRecusandaes" => InventoreIpsamRecusandae::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "InventoreIpsamRecusandaeManys" => InventoreIpsamRecusandae::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}