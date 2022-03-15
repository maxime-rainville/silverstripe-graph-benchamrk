<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EtAutEligendi extends DataObject
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

    private static $table_name = 'EtAutEligendi';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "VoluptasAliquidMolestiae" => VoluptasAliquidMolestiae::class,
        "NesciuntVoluptatemAut" => NesciuntVoluptatemAut::class,
        "ItaqueIpsaFacere" => ItaqueIpsaFacere::class,
        "QuaeOmnisNumquam" => QuaeOmnisNumquam::class,
        "ImpeditNobisSed" => ImpeditNobisSed::class,
        "AutUtMaiores" => AutUtMaiores::class,
        "CorruptiEtLabore" => CorruptiEtLabore::class,
        "UndeDoloremMolestias" => UndeDoloremMolestias::class,
        "VoluptatemDignissimosCommodi" => VoluptatemDignissimosCommodi::class,
        "NobisPorroVelit" => NobisPorroVelit::class,
        "RepudiandaeAtqueEligendi" => RepudiandaeAtqueEligendi::class,
        "AdEumQuasi" => AdEumQuasi::class,
        "CorporisDignissimosEst" => CorporisDignissimosEst::class,
        "AutDoloremIste" => AutDoloremIste::class,
        "SolutaEaA" => SolutaEaA::class,
        "EsseQuasiNesciunt" => EsseQuasiNesciunt::class,
        "QuiAdipisciEt" => QuiAdipisciEt::class,
        "EtAutEligendi" => EtAutEligendi::class,
        "AliquamEnimEsse" => AliquamEnimEsse::class,
        "RepellatEtSit" => RepellatEtSit::class,
        "InOccaecatiCupiditate" => InOccaecatiCupiditate::class
    ];

    private static $has_many = [
        "VoluptasAliquidMolestiaes" => VoluptasAliquidMolestiae::class,
        "NesciuntVoluptatemAuts" => NesciuntVoluptatemAut::class,
        "ItaqueIpsaFaceres" => ItaqueIpsaFacere::class,
        "QuaeOmnisNumquams" => QuaeOmnisNumquam::class,
        "ImpeditNobisSeds" => ImpeditNobisSed::class,
        "AutUtMaioress" => AutUtMaiores::class,
        "CorruptiEtLabores" => CorruptiEtLabore::class,
        "UndeDoloremMolestiass" => UndeDoloremMolestias::class,
        "VoluptatemDignissimosCommodis" => VoluptatemDignissimosCommodi::class,
        "NobisPorroVelits" => NobisPorroVelit::class,
        "RepudiandaeAtqueEligendis" => RepudiandaeAtqueEligendi::class,
        "AdEumQuasis" => AdEumQuasi::class,
        "CorporisDignissimosEsts" => CorporisDignissimosEst::class,
        "AutDoloremIstes" => AutDoloremIste::class,
        "SolutaEaAs" => SolutaEaA::class,
        "EsseQuasiNesciunts" => EsseQuasiNesciunt::class,
        "QuiAdipisciEts" => QuiAdipisciEt::class,
        "EtAutEligendis" => EtAutEligendi::class,
        "AliquamEnimEsses" => AliquamEnimEsse::class,
        "RepellatEtSits" => RepellatEtSit::class,
        "InOccaecatiCupiditates" => InOccaecatiCupiditate::class
    ];
}