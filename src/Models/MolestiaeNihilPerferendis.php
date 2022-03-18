<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class MolestiaeNihilPerferendis extends DataObject
{
    use ModelTrait;
    private static $table_name = 'MolestiaeNihilPerferendis';

    private static $has_one = [
        "ExSedQuia" => ExSedQuia::class
    ];

    private static $has_many = [
        "ExSedQuias" => ExSedQuia::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "ExSedQuiaManys" => ExSedQuia::class
    ];

    private static $extensions = [
        
    ];
}