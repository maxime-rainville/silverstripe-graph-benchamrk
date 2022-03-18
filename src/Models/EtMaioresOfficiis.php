<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EtMaioresOfficiis extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EtMaioresOfficiis';

    private static $has_one = [
        "VelEtQuisquam" => VelEtQuisquam::class
    ];

    private static $has_many = [
        "VelEtQuisquams" => VelEtQuisquam::class
    ];

    private static $many_many = [
        "VelEtQuisquamManys" => VelEtQuisquam::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}