<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class PlaceatOptioQuo extends DataObject
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

    private static $table_name = 'PlaceatOptioQuo';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "FacilisCupiditateCupiditate" => FacilisCupiditateCupiditate::class,
        "AspernaturConsequaturSit" => AspernaturConsequaturSit::class,
        "AsperioresAliquamAtque" => AsperioresAliquamAtque::class,
        "LaudantiumMollitiaDignissimos" => LaudantiumMollitiaDignissimos::class,
        "QuidemAtqueIste" => QuidemAtqueIste::class,
        "SaepeIpsumNeque" => SaepeIpsumNeque::class,
        "SapienteAliasSimilique" => SapienteAliasSimilique::class,
        "TemporeIpsamSit" => TemporeIpsamSit::class,
        "AutemEsseAt" => AutemEsseAt::class,
        "NisiExcepturiDeleniti" => NisiExcepturiDeleniti::class,
        "FugaMinusEarum" => FugaMinusEarum::class,
        "IdIpsumNostrum" => IdIpsumNostrum::class,
        "DoloresEtVero" => DoloresEtVero::class,
        "PlaceatOptioQuo" => PlaceatOptioQuo::class,
        "DoloresAutemVero" => DoloresAutemVero::class,
        "QuaeratEstAutem" => QuaeratEstAutem::class,
        "PossimusSimiliqueQui" => PossimusSimiliqueQui::class,
        "UtReiciendisAut" => UtReiciendisAut::class,
        "SitRationeAb" => SitRationeAb::class,
        "TemporeSedLaudantium" => TemporeSedLaudantium::class,
        "VoluptatemEtEius" => VoluptatemEtEius::class
    ];

    private static $has_many = [
        "FacilisCupiditateCupiditates" => FacilisCupiditateCupiditate::class,
        "AspernaturConsequaturSits" => AspernaturConsequaturSit::class,
        "AsperioresAliquamAtques" => AsperioresAliquamAtque::class,
        "LaudantiumMollitiaDignissimoss" => LaudantiumMollitiaDignissimos::class,
        "QuidemAtqueIstes" => QuidemAtqueIste::class,
        "SaepeIpsumNeques" => SaepeIpsumNeque::class,
        "SapienteAliasSimiliques" => SapienteAliasSimilique::class,
        "TemporeIpsamSits" => TemporeIpsamSit::class,
        "AutemEsseAts" => AutemEsseAt::class,
        "NisiExcepturiDelenitis" => NisiExcepturiDeleniti::class,
        "FugaMinusEarums" => FugaMinusEarum::class,
        "IdIpsumNostrums" => IdIpsumNostrum::class,
        "DoloresEtVeros" => DoloresEtVero::class,
        "PlaceatOptioQuos" => PlaceatOptioQuo::class,
        "DoloresAutemVeros" => DoloresAutemVero::class,
        "QuaeratEstAutems" => QuaeratEstAutem::class,
        "PossimusSimiliqueQuis" => PossimusSimiliqueQui::class,
        "UtReiciendisAuts" => UtReiciendisAut::class,
        "SitRationeAbs" => SitRationeAb::class,
        "TemporeSedLaudantiums" => TemporeSedLaudantium::class,
        "VoluptatemEtEiuss" => VoluptatemEtEius::class
    ];
}