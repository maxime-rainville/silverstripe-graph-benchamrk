<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuoRerumConsequatur extends DataObject
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

    private static $table_name = 'QuoRerumConsequatur';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "VoluptasTeneturAut" => VoluptasTeneturAut::class,
        "AutemHarumAut" => AutemHarumAut::class,
        "QuiaEtEum" => QuiaEtEum::class,
        "ConsequaturModiEst" => ConsequaturModiEst::class,
        "QuisBeataeVoluptatum" => QuisBeataeVoluptatum::class,
        "SolutaQuiEa" => SolutaQuiEa::class,
        "IpsaEstUt" => IpsaEstUt::class,
        "OccaecatiQuasUt" => OccaecatiQuasUt::class,
        "NesciuntDoloremExplicabo" => NesciuntDoloremExplicabo::class,
        "FugiatOditPerferendis" => FugiatOditPerferendis::class,
        "AperiamHicAmet" => AperiamHicAmet::class,
        "ConsequunturEumRepudiandae" => ConsequunturEumRepudiandae::class,
        "IdReiciendisCum" => IdReiciendisCum::class,
        "OmnisDictaVeniam" => OmnisDictaVeniam::class,
        "PariaturQuoUt" => PariaturQuoUt::class,
        "VoluptatemQuiaNihil" => VoluptatemQuiaNihil::class,
        "SitAsperioresVeritatis" => SitAsperioresVeritatis::class,
        "AsperioresQuosFuga" => AsperioresQuosFuga::class,
        "QuoRerumConsequatur" => QuoRerumConsequatur::class,
        "ExcepturiEumDoloremque" => ExcepturiEumDoloremque::class,
        "EosRemSunt" => EosRemSunt::class
    ];

    private static $has_many = [
        "VoluptasTeneturAuts" => VoluptasTeneturAut::class,
        "AutemHarumAuts" => AutemHarumAut::class,
        "QuiaEtEums" => QuiaEtEum::class,
        "ConsequaturModiEsts" => ConsequaturModiEst::class,
        "QuisBeataeVoluptatums" => QuisBeataeVoluptatum::class,
        "SolutaQuiEas" => SolutaQuiEa::class,
        "IpsaEstUts" => IpsaEstUt::class,
        "OccaecatiQuasUts" => OccaecatiQuasUt::class,
        "NesciuntDoloremExplicabos" => NesciuntDoloremExplicabo::class,
        "FugiatOditPerferendiss" => FugiatOditPerferendis::class,
        "AperiamHicAmets" => AperiamHicAmet::class,
        "ConsequunturEumRepudiandaes" => ConsequunturEumRepudiandae::class,
        "IdReiciendisCums" => IdReiciendisCum::class,
        "OmnisDictaVeniams" => OmnisDictaVeniam::class,
        "PariaturQuoUts" => PariaturQuoUt::class,
        "VoluptatemQuiaNihils" => VoluptatemQuiaNihil::class,
        "SitAsperioresVeritatiss" => SitAsperioresVeritatis::class,
        "AsperioresQuosFugas" => AsperioresQuosFuga::class,
        "QuoRerumConsequaturs" => QuoRerumConsequatur::class,
        "ExcepturiEumDoloremques" => ExcepturiEumDoloremque::class,
        "EosRemSunts" => EosRemSunt::class
    ];
}