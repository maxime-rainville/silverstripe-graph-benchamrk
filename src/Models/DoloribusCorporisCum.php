<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DoloribusCorporisCum extends DataObject
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

    private static $table_name = 'DoloribusCorporisCum';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "AspernaturNesciuntQuam" => AspernaturNesciuntQuam::class,
        "PerferendisItaqueEt" => PerferendisItaqueEt::class,
        "DolorumDoloremQuis" => DolorumDoloremQuis::class,
        "AdAutemPariatur" => AdAutemPariatur::class,
        "QuiEtUt" => QuiEtUt::class,
        "ExcepturiIpsumExercitationem" => ExcepturiIpsumExercitationem::class,
        "LaboriosamVoluptatibusAccusamus" => LaboriosamVoluptatibusAccusamus::class,
        "QuoEiusAsperiores" => QuoEiusAsperiores::class,
        "QuoNequeMagnam" => QuoNequeMagnam::class,
        "DistinctioVeniamEt" => DistinctioVeniamEt::class,
        "IureQuiVelit" => IureQuiVelit::class,
        "UtIustoLaborum" => UtIustoLaborum::class,
        "SolutaRerumOfficiis" => SolutaRerumOfficiis::class,
        "DoloribusCorporisCum" => DoloribusCorporisCum::class,
        "VoluptatumItaqueVitae" => VoluptatumItaqueVitae::class,
        "OmnisDolorVeritatis" => OmnisDolorVeritatis::class,
        "QuidemUndeIpsa" => QuidemUndeIpsa::class,
        "OfficiisSintVoluptatem" => OfficiisSintVoluptatem::class,
        "PariaturQuiaMagnam" => PariaturQuiaMagnam::class,
        "RationeCorruptiEius" => RationeCorruptiEius::class,
        "SuntNamSed" => SuntNamSed::class
    ];

    private static $has_many = [
        "AspernaturNesciuntQuams" => AspernaturNesciuntQuam::class,
        "PerferendisItaqueEts" => PerferendisItaqueEt::class,
        "DolorumDoloremQuiss" => DolorumDoloremQuis::class,
        "AdAutemPariaturs" => AdAutemPariatur::class,
        "QuiEtUts" => QuiEtUt::class,
        "ExcepturiIpsumExercitationems" => ExcepturiIpsumExercitationem::class,
        "LaboriosamVoluptatibusAccusamuss" => LaboriosamVoluptatibusAccusamus::class,
        "QuoEiusAsperioress" => QuoEiusAsperiores::class,
        "QuoNequeMagnams" => QuoNequeMagnam::class,
        "DistinctioVeniamEts" => DistinctioVeniamEt::class,
        "IureQuiVelits" => IureQuiVelit::class,
        "UtIustoLaborums" => UtIustoLaborum::class,
        "SolutaRerumOfficiiss" => SolutaRerumOfficiis::class,
        "DoloribusCorporisCums" => DoloribusCorporisCum::class,
        "VoluptatumItaqueVitaes" => VoluptatumItaqueVitae::class,
        "OmnisDolorVeritatiss" => OmnisDolorVeritatis::class,
        "QuidemUndeIpsas" => QuidemUndeIpsa::class,
        "OfficiisSintVoluptatems" => OfficiisSintVoluptatem::class,
        "PariaturQuiaMagnams" => PariaturQuiaMagnam::class,
        "RationeCorruptiEiuss" => RationeCorruptiEius::class,
        "SuntNamSeds" => SuntNamSed::class
    ];
}