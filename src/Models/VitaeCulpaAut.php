<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VitaeCulpaAut extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VitaeCulpaAut';

    private static $has_one = [
        "MaioresAutMolestias" => MaioresAutMolestias::class
    ];

    private static $has_many = [
        "MaioresAutMolestiass" => MaioresAutMolestias::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "MaioresAutMolestiasManys" => MaioresAutMolestias::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}