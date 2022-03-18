<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EarumPossimusUnde extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EarumPossimusUnde';

    private static $has_one = [
        "EarumLaboriosamFacilis" => EarumLaboriosamFacilis::class
    ];

    private static $has_many = [
        "EarumLaboriosamFaciliss" => EarumLaboriosamFacilis::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EarumLaboriosamFacilisManys" => EarumLaboriosamFacilis::class
    ];

    private static $extensions = [
        
    ];
}