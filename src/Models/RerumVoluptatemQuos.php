<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class RerumVoluptatemQuos extends DataObject
{
    use ModelTrait;
    private static $table_name = 'RerumVoluptatemQuos';

    private static $has_one = [
        "SimiliqueFacereAut" => SimiliqueFacereAut::class
    ];

    private static $has_many = [
        "SimiliqueFacereAuts" => SimiliqueFacereAut::class
    ];

    private static $many_many = [
        "SimiliqueFacereAutManys" => SimiliqueFacereAut::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}