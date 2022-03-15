<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuisquamSintVel extends DataObject
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

    private static $table_name = 'QuisquamSintVel';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "QuoArchitectoIusto" => QuoArchitectoIusto::class,
        "QuosAtqueNobis" => QuosAtqueNobis::class,
        "TotamRecusandaeQuae" => TotamRecusandaeQuae::class,
        "DoloremNisiPariatur" => DoloremNisiPariatur::class,
        "IustoVoluptasEnim" => IustoVoluptasEnim::class,
        "DoloreFacereMolestiae" => DoloreFacereMolestiae::class,
        "ConsecteturCulpaQuibusdam" => ConsecteturCulpaQuibusdam::class,
        "AutInciduntEos" => AutInciduntEos::class,
        "OdioIdNatus" => OdioIdNatus::class,
        "EaHicVel" => EaHicVel::class,
        "NullaNonMolestias" => NullaNonMolestias::class,
        "QuisquamSintVel" => QuisquamSintVel::class,
        "QuiAutNumquam" => QuiAutNumquam::class,
        "VoluptateAssumendaHic" => VoluptateAssumendaHic::class,
        "EtMaioresQuia" => EtMaioresQuia::class,
        "OdioQuiDistinctio" => OdioQuiDistinctio::class,
        "IpsamQuiAd" => IpsamQuiAd::class,
        "QuosVoluptatibusQuos" => QuosVoluptatibusQuos::class,
        "VoluptasQuaeratPossimus" => VoluptasQuaeratPossimus::class,
        "UtTotamEligendi" => UtTotamEligendi::class,
        "NatusDolorQui" => NatusDolorQui::class
    ];

    private static $has_many = [
        "QuoArchitectoIustos" => QuoArchitectoIusto::class,
        "QuosAtqueNobiss" => QuosAtqueNobis::class,
        "TotamRecusandaeQuaes" => TotamRecusandaeQuae::class,
        "DoloremNisiPariaturs" => DoloremNisiPariatur::class,
        "IustoVoluptasEnims" => IustoVoluptasEnim::class,
        "DoloreFacereMolestiaes" => DoloreFacereMolestiae::class,
        "ConsecteturCulpaQuibusdams" => ConsecteturCulpaQuibusdam::class,
        "AutInciduntEoss" => AutInciduntEos::class,
        "OdioIdNatuss" => OdioIdNatus::class,
        "EaHicVels" => EaHicVel::class,
        "NullaNonMolestiass" => NullaNonMolestias::class,
        "QuisquamSintVels" => QuisquamSintVel::class,
        "QuiAutNumquams" => QuiAutNumquam::class,
        "VoluptateAssumendaHics" => VoluptateAssumendaHic::class,
        "EtMaioresQuias" => EtMaioresQuia::class,
        "OdioQuiDistinctios" => OdioQuiDistinctio::class,
        "IpsamQuiAds" => IpsamQuiAd::class,
        "QuosVoluptatibusQuoss" => QuosVoluptatibusQuos::class,
        "VoluptasQuaeratPossimuss" => VoluptasQuaeratPossimus::class,
        "UtTotamEligendis" => UtTotamEligendi::class,
        "NatusDolorQuis" => NatusDolorQui::class
    ];
}