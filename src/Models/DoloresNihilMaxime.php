<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DoloresNihilMaxime extends DataObject
{
    use ModelTrait;
    private static $table_name = 'DoloresNihilMaxime';

    private static $has_one = [
        "AutOditMinima" => AutOditMinima::class
    ];

    private static $has_many = [
        "AutOditMinimas" => AutOditMinima::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "AutOditMinimaManys" => AutOditMinima::class
    ];

    private static $extensions = [
        
    ];
}