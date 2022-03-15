<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class FugitSintAccusamus extends DataObject
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

    private static $table_name = 'FugitSintAccusamus';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "AnimiEtAccusantium" => AnimiEtAccusantium::class,
        "FugaEvenietConsequatur" => FugaEvenietConsequatur::class,
        "HarumPlaceatDoloribus" => HarumPlaceatDoloribus::class,
        "AspernaturEligendiVoluptatum" => AspernaturEligendiVoluptatum::class,
        "ExcepturiLaboriosamDignissimos" => ExcepturiLaboriosamDignissimos::class,
        "SequiFugiatEt" => SequiFugiatEt::class,
        "IsteVeniamVoluptatem" => IsteVeniamVoluptatem::class,
        "BlanditiisVoluptasTotam" => BlanditiisVoluptasTotam::class,
        "EtQuoSed" => EtQuoSed::class,
        "AperiamIpsamAut" => AperiamIpsamAut::class,
        "EstEnimEst" => EstEnimEst::class,
        "QuiUtCumque" => QuiUtCumque::class,
        "LaboriosamDoloremSuscipit" => LaboriosamDoloremSuscipit::class,
        "PossimusNesciuntFacilis" => PossimusNesciuntFacilis::class,
        "FugitSintAccusamus" => FugitSintAccusamus::class,
        "OfficiaNesciuntEarum" => OfficiaNesciuntEarum::class,
        "IlloExpeditaEt" => IlloExpeditaEt::class,
        "NonEtAd" => NonEtAd::class,
        "UtNullaQuisquam" => UtNullaQuisquam::class,
        "SitNullaDeserunt" => SitNullaDeserunt::class,
        "NemoDeseruntQuae" => NemoDeseruntQuae::class
    ];

    private static $has_many = [
        "AnimiEtAccusantiums" => AnimiEtAccusantium::class,
        "FugaEvenietConsequaturs" => FugaEvenietConsequatur::class,
        "HarumPlaceatDoloribuss" => HarumPlaceatDoloribus::class,
        "AspernaturEligendiVoluptatums" => AspernaturEligendiVoluptatum::class,
        "ExcepturiLaboriosamDignissimoss" => ExcepturiLaboriosamDignissimos::class,
        "SequiFugiatEts" => SequiFugiatEt::class,
        "IsteVeniamVoluptatems" => IsteVeniamVoluptatem::class,
        "BlanditiisVoluptasTotams" => BlanditiisVoluptasTotam::class,
        "EtQuoSeds" => EtQuoSed::class,
        "AperiamIpsamAuts" => AperiamIpsamAut::class,
        "EstEnimEsts" => EstEnimEst::class,
        "QuiUtCumques" => QuiUtCumque::class,
        "LaboriosamDoloremSuscipits" => LaboriosamDoloremSuscipit::class,
        "PossimusNesciuntFaciliss" => PossimusNesciuntFacilis::class,
        "FugitSintAccusamuss" => FugitSintAccusamus::class,
        "OfficiaNesciuntEarums" => OfficiaNesciuntEarum::class,
        "IlloExpeditaEts" => IlloExpeditaEt::class,
        "NonEtAds" => NonEtAd::class,
        "UtNullaQuisquams" => UtNullaQuisquam::class,
        "SitNullaDeserunts" => SitNullaDeserunt::class,
        "NemoDeseruntQuaes" => NemoDeseruntQuae::class
    ];
}