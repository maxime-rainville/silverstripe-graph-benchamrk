<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class PossimusQuasCorrupti extends DataObject
{
    use ModelTrait;
    private static $table_name = 'PossimusQuasCorrupti';

    private static $has_one = [
        "ConsecteturVelitVoluptatem" => ConsecteturVelitVoluptatem::class
    ];

    private static $has_many = [
        "ConsecteturVelitVoluptatems" => ConsecteturVelitVoluptatem::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "ConsecteturVelitVoluptatemManys" => ConsecteturVelitVoluptatem::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}