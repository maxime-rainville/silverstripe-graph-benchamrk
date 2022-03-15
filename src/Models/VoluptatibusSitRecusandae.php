<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VoluptatibusSitRecusandae extends DataObject
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

    private static $table_name = 'VoluptatibusSitRecusandae';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "BeataeFugaNesciunt" => BeataeFugaNesciunt::class,
        "NequeQuisQui" => NequeQuisQui::class,
        "MolestiaeVitaeA" => MolestiaeVitaeA::class,
        "AutSimiliqueEt" => AutSimiliqueEt::class,
        "LaudantiumTemporaEnim" => LaudantiumTemporaEnim::class,
        "RerumQuiaEt" => RerumQuiaEt::class,
        "VoluptatibusSitRecusandae" => VoluptatibusSitRecusandae::class,
        "VelSintDoloremque" => VelSintDoloremque::class,
        "AtEstAut" => AtEstAut::class,
        "FacereUtNon" => FacereUtNon::class,
        "AutVoluptatemVoluptas" => AutVoluptatemVoluptas::class,
        "QuiaNisiPraesentium" => QuiaNisiPraesentium::class,
        "AsperioresQuamOmnis" => AsperioresQuamOmnis::class,
        "QuiaEiusEst" => QuiaEiusEst::class,
        "ImpeditSimiliquePerferendis" => ImpeditSimiliquePerferendis::class,
        "QuoMaioresEt" => QuoMaioresEt::class,
        "SitIllumFugiat" => SitIllumFugiat::class,
        "RerumNonAutem" => RerumNonAutem::class,
        "ConsecteturIustoIn" => ConsecteturIustoIn::class,
        "AbMagnamEt" => AbMagnamEt::class,
        "OccaecatiAliquidAssumenda" => OccaecatiAliquidAssumenda::class
    ];

    private static $has_many = [
        "BeataeFugaNesciunts" => BeataeFugaNesciunt::class,
        "NequeQuisQuis" => NequeQuisQui::class,
        "MolestiaeVitaeAs" => MolestiaeVitaeA::class,
        "AutSimiliqueEts" => AutSimiliqueEt::class,
        "LaudantiumTemporaEnims" => LaudantiumTemporaEnim::class,
        "RerumQuiaEts" => RerumQuiaEt::class,
        "VoluptatibusSitRecusandaes" => VoluptatibusSitRecusandae::class,
        "VelSintDoloremques" => VelSintDoloremque::class,
        "AtEstAuts" => AtEstAut::class,
        "FacereUtNons" => FacereUtNon::class,
        "AutVoluptatemVoluptass" => AutVoluptatemVoluptas::class,
        "QuiaNisiPraesentiums" => QuiaNisiPraesentium::class,
        "AsperioresQuamOmniss" => AsperioresQuamOmnis::class,
        "QuiaEiusEsts" => QuiaEiusEst::class,
        "ImpeditSimiliquePerferendiss" => ImpeditSimiliquePerferendis::class,
        "QuoMaioresEts" => QuoMaioresEt::class,
        "SitIllumFugiats" => SitIllumFugiat::class,
        "RerumNonAutems" => RerumNonAutem::class,
        "ConsecteturIustoIns" => ConsecteturIustoIn::class,
        "AbMagnamEts" => AbMagnamEt::class,
        "OccaecatiAliquidAssumendas" => OccaecatiAliquidAssumenda::class
    ];
}