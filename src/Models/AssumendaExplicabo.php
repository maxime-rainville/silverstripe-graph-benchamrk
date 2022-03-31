<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AssumendaExplicabo extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AssumendaExplicabo';

    private static $has_one = [
        "AutEnim" => AutEnim::class
    ];

    private static $has_many = [
        "AutEnims" => AutEnim::class
    ];

    private static $many_many = [
        "AutEnimManys" => AutEnim::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}