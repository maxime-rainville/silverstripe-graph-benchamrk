<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuisquamPossimusBlanditiis extends DataObject
{

    private static $db = [
        'AStringValue' => 'Varchar',
        'Numeric' => 'Int',
        'TrueOrFalse' => 'Boolean',
        'MyNovel' => 'Text',
        'MyNovelWithFormattedContent' => 'HTMLText',
        'ShowMeTheMoney' => 'Money',
        'ListOfThings' => 'Enum("USD,EUR,GBP,AUD,CAD,CHF,CNY,DKK,HKD,JPY,NZD,PLN,RUB,SEK,SGD,THB,ZAR")',
        'YourTimeWillCome' => 'Datetime',
        'SplintingNumber' => 'Decimal',
        'InTheYearOfThyLord' => 'Year',
    ];

    private static $table_name = 'QuisquamPossimusBlanditiis';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "OfficiisIustoSed" => OfficiisIustoSed::class,
        "EstIureVoluptas" => EstIureVoluptas::class,
        "QuosDoloribusVoluptatem" => QuosDoloribusVoluptatem::class,
        "QuisquamPossimusBlanditiis" => QuisquamPossimusBlanditiis::class,
        "NamMinusAut" => NamMinusAut::class,
        "NobisAperiamNihil" => NobisAperiamNihil::class,
        "EaqueQuiEt" => EaqueQuiEt::class,
        "EosSaepeEarum" => EosSaepeEarum::class,
        "EtErrorEt" => EtErrorEt::class,
        "AdipisciAmetMaxime" => AdipisciAmetMaxime::class,
        "ConsequunturSintMagnam" => ConsequunturSintMagnam::class,
        "AutLaudantiumVoluptatem" => AutLaudantiumVoluptatem::class,
        "AsperioresDelenitiLaboriosam" => AsperioresDelenitiLaboriosam::class,
        "QuiQuisRerum" => QuiQuisRerum::class,
        "VoluptasDoloresUt" => VoluptasDoloresUt::class,
        "AdipisciVelArchitecto" => AdipisciVelArchitecto::class,
        "MagniEnimVoluptatum" => MagniEnimVoluptatum::class,
        "MagnamQuiVoluptas" => MagnamQuiVoluptas::class,
        "LaboreOmnisCumque" => LaboreOmnisCumque::class,
        "ItaqueQuosQuia" => ItaqueQuosQuia::class,
        "DolorePerspiciatisAperiam" => DolorePerspiciatisAperiam::class
    ];

    private static $has_many = [
        "OfficiisIustoSeds" => OfficiisIustoSed::class,
        "EstIureVoluptass" => EstIureVoluptas::class,
        "QuosDoloribusVoluptatems" => QuosDoloribusVoluptatem::class,
        "QuisquamPossimusBlanditiiss" => QuisquamPossimusBlanditiis::class,
        "NamMinusAuts" => NamMinusAut::class,
        "NobisAperiamNihils" => NobisAperiamNihil::class,
        "EaqueQuiEts" => EaqueQuiEt::class,
        "EosSaepeEarums" => EosSaepeEarum::class,
        "EtErrorEts" => EtErrorEt::class,
        "AdipisciAmetMaximes" => AdipisciAmetMaxime::class,
        "ConsequunturSintMagnams" => ConsequunturSintMagnam::class,
        "AutLaudantiumVoluptatems" => AutLaudantiumVoluptatem::class,
        "AsperioresDelenitiLaboriosams" => AsperioresDelenitiLaboriosam::class,
        "QuiQuisRerums" => QuiQuisRerum::class,
        "VoluptasDoloresUts" => VoluptasDoloresUt::class,
        "AdipisciVelArchitectos" => AdipisciVelArchitecto::class,
        "MagniEnimVoluptatums" => MagniEnimVoluptatum::class,
        "MagnamQuiVoluptass" => MagnamQuiVoluptas::class,
        "LaboreOmnisCumques" => LaboreOmnisCumque::class,
        "ItaqueQuosQuias" => ItaqueQuosQuia::class,
        "DolorePerspiciatisAperiams" => DolorePerspiciatisAperiam::class
    ];
}