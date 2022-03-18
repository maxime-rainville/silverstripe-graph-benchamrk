<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class FacilisNihilMolestias extends DataObject
{
    use ModelTrait;
    private static $table_name = 'FacilisNihilMolestias';

    private static $has_one = [
        "LiberoMagnamEos" => LiberoMagnamEos::class
    ];

    private static $has_many = [
        "LiberoMagnamEoss" => LiberoMagnamEos::class
    ];

    private static $many_many = [
        "LiberoMagnamEosManys" => LiberoMagnamEos::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}