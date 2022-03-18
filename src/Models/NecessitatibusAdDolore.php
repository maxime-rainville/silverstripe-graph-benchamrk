<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class NecessitatibusAdDolore extends DataObject
{
    use ModelTrait;
    private static $table_name = 'NecessitatibusAdDolore';

    private static $has_one = [
        "UtImpeditRem" => UtImpeditRem::class
    ];

    private static $has_many = [
        "UtImpeditRems" => UtImpeditRem::class
    ];

    private static $many_many = [
        "UtImpeditRemManys" => UtImpeditRem::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}