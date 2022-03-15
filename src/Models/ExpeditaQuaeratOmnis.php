<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class ExpeditaQuaeratOmnis extends DataObject
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

    private static $table_name = 'ExpeditaQuaeratOmnis';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "NostrumAccusantiumVelit" => NostrumAccusantiumVelit::class,
        "VelitEtQui" => VelitEtQui::class,
        "VeritatisDoloremSunt" => VeritatisDoloremSunt::class,
        "EtEtNobis" => EtEtNobis::class,
        "RerumAutOfficiis" => RerumAutOfficiis::class,
        "VoluptatemRepellendusFacere" => VoluptatemRepellendusFacere::class,
        "HarumRepellatOfficia" => HarumRepellatOfficia::class,
        "BlanditiisQuisEum" => BlanditiisQuisEum::class,
        "NobisMinimaAut" => NobisMinimaAut::class,
        "NullaEarumIure" => NullaEarumIure::class,
        "DelenitiAliquamConsectetur" => DelenitiAliquamConsectetur::class,
        "OptioConsequunturAb" => OptioConsequunturAb::class,
        "DeseruntEtHic" => DeseruntEtHic::class,
        "ExpeditaQuaeratOmnis" => ExpeditaQuaeratOmnis::class,
        "QuiRepellatEaque" => QuiRepellatEaque::class,
        "CommodiVelEius" => CommodiVelEius::class,
        "MagniOditEnim" => MagniOditEnim::class,
        "SuntDoloremAut" => SuntDoloremAut::class,
        "AutVoluptasSunt" => AutVoluptasSunt::class,
        "MinusIdSoluta" => MinusIdSoluta::class,
        "SintSolutaFacere" => SintSolutaFacere::class
    ];

    private static $has_many = [
        "NostrumAccusantiumVelits" => NostrumAccusantiumVelit::class,
        "VelitEtQuis" => VelitEtQui::class,
        "VeritatisDoloremSunts" => VeritatisDoloremSunt::class,
        "EtEtNobiss" => EtEtNobis::class,
        "RerumAutOfficiiss" => RerumAutOfficiis::class,
        "VoluptatemRepellendusFaceres" => VoluptatemRepellendusFacere::class,
        "HarumRepellatOfficias" => HarumRepellatOfficia::class,
        "BlanditiisQuisEums" => BlanditiisQuisEum::class,
        "NobisMinimaAuts" => NobisMinimaAut::class,
        "NullaEarumIures" => NullaEarumIure::class,
        "DelenitiAliquamConsecteturs" => DelenitiAliquamConsectetur::class,
        "OptioConsequunturAbs" => OptioConsequunturAb::class,
        "DeseruntEtHics" => DeseruntEtHic::class,
        "ExpeditaQuaeratOmniss" => ExpeditaQuaeratOmnis::class,
        "QuiRepellatEaques" => QuiRepellatEaque::class,
        "CommodiVelEiuss" => CommodiVelEius::class,
        "MagniOditEnims" => MagniOditEnim::class,
        "SuntDoloremAuts" => SuntDoloremAut::class,
        "AutVoluptasSunts" => AutVoluptasSunt::class,
        "MinusIdSolutas" => MinusIdSoluta::class,
        "SintSolutaFaceres" => SintSolutaFacere::class
    ];
}