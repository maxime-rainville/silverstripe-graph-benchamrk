<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class SitFugiatDelectus extends DataObject
{
    use ModelTrait;
    private static $table_name = 'SitFugiatDelectus';

    private static $has_one = [
        "QuiEtIpsa" => QuiEtIpsa::class
    ];

    private static $has_many = [
        "QuiEtIpsas" => QuiEtIpsa::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "QuiEtIpsaManys" => QuiEtIpsa::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}