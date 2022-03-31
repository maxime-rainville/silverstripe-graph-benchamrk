<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class CumIusto extends DataObject
{
    use ModelTrait;
    private static $table_name = 'CumIusto';

    private static $has_one = [
        "FugitUnde" => FugitUnde::class
    ];

    private static $has_many = [
        "FugitUndes" => FugitUnde::class
    ];

    private static $many_many = [
        "FugitUndeManys" => FugitUnde::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}