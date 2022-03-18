<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class RepudiandaeLaborumUt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'RepudiandaeLaborumUt';

    private static $has_one = [
        "UtFacereDolor" => UtFacereDolor::class
    ];

    private static $has_many = [
        "UtFacereDolors" => UtFacereDolor::class
    ];

    private static $many_many = [
        "UtFacereDolorManys" => UtFacereDolor::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}