<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class CorruptiEt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'CorruptiEt';

    private static $has_one = [
        "NumquamTempora" => NumquamTempora::class
    ];

    private static $has_many = [
        "NumquamTemporas" => NumquamTempora::class
    ];

    private static $many_many = [
        "NumquamTemporaManys" => NumquamTempora::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}