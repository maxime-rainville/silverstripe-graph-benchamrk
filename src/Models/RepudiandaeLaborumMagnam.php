<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class RepudiandaeLaborumMagnam extends DataObject
{
    use ModelTrait;
    private static $table_name = 'RepudiandaeLaborumMagnam';

    private static $has_one = [
        "SintNihilQui" => SintNihilQui::class
    ];

    private static $has_many = [
        "SintNihilQuis" => SintNihilQui::class
    ];

    private static $many_many = [
        "SintNihilQuiManys" => SintNihilQui::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class . '.versioned',
    ];
}