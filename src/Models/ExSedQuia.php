<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class ExSedQuia extends DataObject
{
    use ModelTrait;
    private static $table_name = 'ExSedQuia';

    private static $has_one = [
        "MolestiaeNihilPerferendis" => MolestiaeNihilPerferendis::class
    ];

    private static $has_many = [
        "MolestiaeNihilPerferendiss" => MolestiaeNihilPerferendis::class
    ];

    private static $many_many = [
        "MolestiaeNihilPerferendisManys" => MolestiaeNihilPerferendis::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}