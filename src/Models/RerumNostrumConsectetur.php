<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class RerumNostrumConsectetur extends DataObject
{
    use ModelTrait;
    private static $table_name = 'RerumNostrumConsectetur';

    private static $has_one = [
        "OdioVoluptatemMagni" => OdioVoluptatemMagni::class
    ];

    private static $has_many = [
        "OdioVoluptatemMagnis" => OdioVoluptatemMagni::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "OdioVoluptatemMagniManys" => OdioVoluptatemMagni::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}