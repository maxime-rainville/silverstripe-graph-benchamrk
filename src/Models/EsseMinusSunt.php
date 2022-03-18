<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EsseMinusSunt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EsseMinusSunt';

    private static $has_one = [
        "ExercitationemLaboreEst" => ExercitationemLaboreEst::class
    ];

    private static $has_many = [
        "ExercitationemLaboreEsts" => ExercitationemLaboreEst::class
    ];

    private static $many_many = [
        "ExercitationemLaboreEstManys" => ExercitationemLaboreEst::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}