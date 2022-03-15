<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class IpsamFacilisEa extends DataObject
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

    private static $table_name = 'IpsamFacilisEa';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "NonMinusSed" => NonMinusSed::class,
        "OfficiaVeniamTotam" => OfficiaVeniamTotam::class,
        "IpsamFacilisEa" => IpsamFacilisEa::class,
        "QuiAccusamusIusto" => QuiAccusamusIusto::class,
        "AutIlloA" => AutIlloA::class,
        "DictaSaepeAsperiores" => DictaSaepeAsperiores::class,
        "VoluptatibusAliquamQuos" => VoluptatibusAliquamQuos::class,
        "MaioresAccusantiumNon" => MaioresAccusantiumNon::class,
        "IustoSintSequi" => IustoSintSequi::class,
        "OptioQuoNihil" => OptioQuoNihil::class,
        "ErrorTemporaCum" => ErrorTemporaCum::class,
        "InDoloremqueNam" => InDoloremqueNam::class,
        "IpsumIpsaPerferendis" => IpsumIpsaPerferendis::class,
        "QuasiDolorIure" => QuasiDolorIure::class,
        "UtQuodVoluptas" => UtQuodVoluptas::class,
        "ItaqueQuoMagnam" => ItaqueQuoMagnam::class,
        "ConsequunturVoluptatumVelit" => ConsequunturVoluptatumVelit::class,
        "VelitQuiaIllum" => VelitQuiaIllum::class,
        "EstPerferendisHic" => EstPerferendisHic::class,
        "FugiatEsseConsequatur" => FugiatEsseConsequatur::class,
        "PerspiciatisEumCumque" => PerspiciatisEumCumque::class
    ];

    private static $has_many = [
        "NonMinusSeds" => NonMinusSed::class,
        "OfficiaVeniamTotams" => OfficiaVeniamTotam::class,
        "IpsamFacilisEas" => IpsamFacilisEa::class,
        "QuiAccusamusIustos" => QuiAccusamusIusto::class,
        "AutIlloAs" => AutIlloA::class,
        "DictaSaepeAsperioress" => DictaSaepeAsperiores::class,
        "VoluptatibusAliquamQuoss" => VoluptatibusAliquamQuos::class,
        "MaioresAccusantiumNons" => MaioresAccusantiumNon::class,
        "IustoSintSequis" => IustoSintSequi::class,
        "OptioQuoNihils" => OptioQuoNihil::class,
        "ErrorTemporaCums" => ErrorTemporaCum::class,
        "InDoloremqueNams" => InDoloremqueNam::class,
        "IpsumIpsaPerferendiss" => IpsumIpsaPerferendis::class,
        "QuasiDolorIures" => QuasiDolorIure::class,
        "UtQuodVoluptass" => UtQuodVoluptas::class,
        "ItaqueQuoMagnams" => ItaqueQuoMagnam::class,
        "ConsequunturVoluptatumVelits" => ConsequunturVoluptatumVelit::class,
        "VelitQuiaIllums" => VelitQuiaIllum::class,
        "EstPerferendisHics" => EstPerferendisHic::class,
        "FugiatEsseConsequaturs" => FugiatEsseConsequatur::class,
        "PerspiciatisEumCumques" => PerspiciatisEumCumque::class
    ];
}