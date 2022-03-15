<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class NonRerumIusto extends DataObject
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

    private static $table_name = 'NonRerumIusto';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "OfficiaTemporeNihil" => OfficiaTemporeNihil::class,
        "EstAliasAb" => EstAliasAb::class,
        "NonRerumIusto" => NonRerumIusto::class,
        "ConsequunturVeniamQuos" => ConsequunturVeniamQuos::class,
        "NihilExQui" => NihilExQui::class,
        "QuaeQuasiA" => QuaeQuasiA::class,
        "AutemSedEveniet" => AutemSedEveniet::class,
        "EumEtCum" => EumEtCum::class,
        "SequiQuiNihil" => SequiQuiNihil::class,
        "CumqueLaboriosamSoluta" => CumqueLaboriosamSoluta::class,
        "UllamDoloremqueQuod" => UllamDoloremqueQuod::class,
        "QuiaLaboreVel" => QuiaLaboreVel::class,
        "AutVelFugit" => AutVelFugit::class,
        "EtQuosA" => EtQuosA::class,
        "ReiciendisProvidentFuga" => ReiciendisProvidentFuga::class,
        "TemporibusIpsaDoloribus" => TemporibusIpsaDoloribus::class,
        "DolorVoluptatumOfficia" => DolorVoluptatumOfficia::class,
        "VitaeQuaeAut" => VitaeQuaeAut::class,
        "SitDoloreEst" => SitDoloreEst::class,
        "NonIpsumEaque" => NonIpsumEaque::class,
        "VoluptatesAssumendaIllo" => VoluptatesAssumendaIllo::class
    ];

    private static $has_many = [
        "OfficiaTemporeNihils" => OfficiaTemporeNihil::class,
        "EstAliasAbs" => EstAliasAb::class,
        "NonRerumIustos" => NonRerumIusto::class,
        "ConsequunturVeniamQuoss" => ConsequunturVeniamQuos::class,
        "NihilExQuis" => NihilExQui::class,
        "QuaeQuasiAs" => QuaeQuasiA::class,
        "AutemSedEveniets" => AutemSedEveniet::class,
        "EumEtCums" => EumEtCum::class,
        "SequiQuiNihils" => SequiQuiNihil::class,
        "CumqueLaboriosamSolutas" => CumqueLaboriosamSoluta::class,
        "UllamDoloremqueQuods" => UllamDoloremqueQuod::class,
        "QuiaLaboreVels" => QuiaLaboreVel::class,
        "AutVelFugits" => AutVelFugit::class,
        "EtQuosAs" => EtQuosA::class,
        "ReiciendisProvidentFugas" => ReiciendisProvidentFuga::class,
        "TemporibusIpsaDoloribuss" => TemporibusIpsaDoloribus::class,
        "DolorVoluptatumOfficias" => DolorVoluptatumOfficia::class,
        "VitaeQuaeAuts" => VitaeQuaeAut::class,
        "SitDoloreEsts" => SitDoloreEst::class,
        "NonIpsumEaques" => NonIpsumEaque::class,
        "VoluptatesAssumendaIllos" => VoluptatesAssumendaIllo::class
    ];
}