<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EtNihilEsse extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EtNihilEsse';

    private static $has_one = [
        "ExRepudiandaeNon" => ExRepudiandaeNon::class
    ];

    private static $has_many = [
        "ExRepudiandaeNons" => ExRepudiandaeNon::class
    ];

    private static $many_many = [
        "ExRepudiandaeNonManys" => ExRepudiandaeNon::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}