<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class IdDolorFacere extends DataObject
{
    use ModelTrait;
    private static $table_name = 'IdDolorFacere';

    private static $has_one = [
        "MolestiaeDebitisDoloribus" => MolestiaeDebitisDoloribus::class
    ];

    private static $has_many = [
        "MolestiaeDebitisDoloribuss" => MolestiaeDebitisDoloribus::class
    ];

    private static $many_many = [
        "MolestiaeDebitisDoloribusManys" => MolestiaeDebitisDoloribus::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}