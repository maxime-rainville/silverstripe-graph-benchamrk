<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class ConsecteturAdipisciAutem extends DataObject
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

    private static $table_name = 'ConsecteturAdipisciAutem';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "ConsequaturArchitectoAut" => ConsequaturArchitectoAut::class,
        "QuiExEst" => QuiExEst::class,
        "VoluptatemEaqueAlias" => VoluptatemEaqueAlias::class,
        "OdioVoluptateConsequuntur" => OdioVoluptateConsequuntur::class,
        "QuisSitFugit" => QuisSitFugit::class,
        "NullaAbIure" => NullaAbIure::class,
        "QuasiQuiA" => QuasiQuiA::class,
        "EtModiAccusamus" => EtModiAccusamus::class,
        "ConsecteturAdipisciAutem" => ConsecteturAdipisciAutem::class,
        "PerferendisCorporisAccusamus" => PerferendisCorporisAccusamus::class,
        "QuoUtEt" => QuoUtEt::class,
        "AutEarumPraesentium" => AutEarumPraesentium::class,
        "QuiaOmnisDucimus" => QuiaOmnisDucimus::class,
        "DignissimosEtNon" => DignissimosEtNon::class,
        "IustoNequeDolorem" => IustoNequeDolorem::class,
        "IsteNihilCumque" => IsteNihilCumque::class,
        "MolestiasNostrumReprehenderit" => MolestiasNostrumReprehenderit::class,
        "ArchitectoSedEius" => ArchitectoSedEius::class,
        "ConsecteturEtVelit" => ConsecteturEtVelit::class,
        "CommodiNemoTenetur" => CommodiNemoTenetur::class,
        "MaximeExcepturiQuasi" => MaximeExcepturiQuasi::class
    ];

    private static $has_many = [
        "ConsequaturArchitectoAuts" => ConsequaturArchitectoAut::class,
        "QuiExEsts" => QuiExEst::class,
        "VoluptatemEaqueAliass" => VoluptatemEaqueAlias::class,
        "OdioVoluptateConsequunturs" => OdioVoluptateConsequuntur::class,
        "QuisSitFugits" => QuisSitFugit::class,
        "NullaAbIures" => NullaAbIure::class,
        "QuasiQuiAs" => QuasiQuiA::class,
        "EtModiAccusamuss" => EtModiAccusamus::class,
        "ConsecteturAdipisciAutems" => ConsecteturAdipisciAutem::class,
        "PerferendisCorporisAccusamuss" => PerferendisCorporisAccusamus::class,
        "QuoUtEts" => QuoUtEt::class,
        "AutEarumPraesentiums" => AutEarumPraesentium::class,
        "QuiaOmnisDucimuss" => QuiaOmnisDucimus::class,
        "DignissimosEtNons" => DignissimosEtNon::class,
        "IustoNequeDolorems" => IustoNequeDolorem::class,
        "IsteNihilCumques" => IsteNihilCumque::class,
        "MolestiasNostrumReprehenderits" => MolestiasNostrumReprehenderit::class,
        "ArchitectoSedEiuss" => ArchitectoSedEius::class,
        "ConsecteturEtVelits" => ConsecteturEtVelit::class,
        "CommodiNemoTeneturs" => CommodiNemoTenetur::class,
        "MaximeExcepturiQuasis" => MaximeExcepturiQuasi::class
    ];
}