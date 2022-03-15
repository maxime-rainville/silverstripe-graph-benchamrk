<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class SedEtExercitationem extends DataObject
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

    private static $table_name = 'SedEtExercitationem';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "UndeDoloresPlaceat" => UndeDoloresPlaceat::class,
        "NonBeataeUt" => NonBeataeUt::class,
        "SedEtExercitationem" => SedEtExercitationem::class,
        "EtAAd" => EtAAd::class,
        "ExercitationemDoloreEnim" => ExercitationemDoloreEnim::class,
        "AspernaturFugiatVoluptas" => AspernaturFugiatVoluptas::class,
        "TemporaConsequaturUt" => TemporaConsequaturUt::class,
        "ErrorNesciuntDeleniti" => ErrorNesciuntDeleniti::class,
        "VoluptatesIpsaEsse" => VoluptatesIpsaEsse::class,
        "VoluptatemReiciendisId" => VoluptatemReiciendisId::class,
        "ModiEtDolorum" => ModiEtDolorum::class,
        "EtInciduntSit" => EtInciduntSit::class,
        "QuiNullaVoluptatum" => QuiNullaVoluptatum::class,
        "SitOmnisAsperiores" => SitOmnisAsperiores::class,
        "AtqueCumConsequatur" => AtqueCumConsequatur::class,
        "QuasSuscipitQuam" => QuasSuscipitQuam::class,
        "SuntQuodDolorem" => SuntQuodDolorem::class,
        "ExQuosTempore" => ExQuosTempore::class,
        "EtEaCommodi" => EtEaCommodi::class,
        "EnimDictaQuia" => EnimDictaQuia::class,
        "VoluptasAssumendaRepellat" => VoluptasAssumendaRepellat::class
    ];

    private static $has_many = [
        "UndeDoloresPlaceats" => UndeDoloresPlaceat::class,
        "NonBeataeUts" => NonBeataeUt::class,
        "SedEtExercitationems" => SedEtExercitationem::class,
        "EtAAds" => EtAAd::class,
        "ExercitationemDoloreEnims" => ExercitationemDoloreEnim::class,
        "AspernaturFugiatVoluptass" => AspernaturFugiatVoluptas::class,
        "TemporaConsequaturUts" => TemporaConsequaturUt::class,
        "ErrorNesciuntDelenitis" => ErrorNesciuntDeleniti::class,
        "VoluptatesIpsaEsses" => VoluptatesIpsaEsse::class,
        "VoluptatemReiciendisIds" => VoluptatemReiciendisId::class,
        "ModiEtDolorums" => ModiEtDolorum::class,
        "EtInciduntSits" => EtInciduntSit::class,
        "QuiNullaVoluptatums" => QuiNullaVoluptatum::class,
        "SitOmnisAsperioress" => SitOmnisAsperiores::class,
        "AtqueCumConsequaturs" => AtqueCumConsequatur::class,
        "QuasSuscipitQuams" => QuasSuscipitQuam::class,
        "SuntQuodDolorems" => SuntQuodDolorem::class,
        "ExQuosTempores" => ExQuosTempore::class,
        "EtEaCommodis" => EtEaCommodi::class,
        "EnimDictaQuias" => EnimDictaQuia::class,
        "VoluptasAssumendaRepellats" => VoluptasAssumendaRepellat::class
    ];
}