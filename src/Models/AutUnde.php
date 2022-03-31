<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AutUnde extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AutUnde';

    private static $has_one = [
        "MolestiaeTemporibus" => MolestiaeTemporibus::class
    ];

    private static $has_many = [
        "MolestiaeTemporibuss" => MolestiaeTemporibus::class
    ];

    private static $many_many = [
        "MolestiaeTemporibusManys" => MolestiaeTemporibus::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}