<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VoluptatemRationeSed extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VoluptatemRationeSed';

    private static $has_one = [
        "CumEosBeatae" => CumEosBeatae::class
    ];

    private static $has_many = [
        "CumEosBeataes" => CumEosBeatae::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "CumEosBeataeManys" => CumEosBeatae::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}