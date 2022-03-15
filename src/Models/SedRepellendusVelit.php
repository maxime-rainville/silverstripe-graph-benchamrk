<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class SedRepellendusVelit extends DataObject
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

    private static $table_name = 'SedRepellendusVelit';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "SapienteQuaeratQuis" => SapienteQuaeratQuis::class,
        "NihilCorruptiEius" => NihilCorruptiEius::class,
        "DictaEtSit" => DictaEtSit::class,
        "IpsamRecusandaeVoluptatem" => IpsamRecusandaeVoluptatem::class,
        "FugiatQuibusdamEligendi" => FugiatQuibusdamEligendi::class,
        "PerferendisPerspiciatisDolore" => PerferendisPerspiciatisDolore::class,
        "DoloribusSedOccaecati" => DoloribusSedOccaecati::class,
        "IureHicRerum" => IureHicRerum::class,
        "EosCorruptiDolor" => EosCorruptiDolor::class,
        "IdVoluptatibusVoluptas" => IdVoluptatibusVoluptas::class,
        "DelectusFacilisIncidunt" => DelectusFacilisIncidunt::class,
        "SuscipitAutemNulla" => SuscipitAutemNulla::class,
        "NonEligendiFugit" => NonEligendiFugit::class,
        "QuasiAutemAtque" => QuasiAutemAtque::class,
        "AutAdipisciDeserunt" => AutAdipisciDeserunt::class,
        "EnimAutMinus" => EnimAutMinus::class,
        "SedRepellendusVelit" => SedRepellendusVelit::class,
        "FacereEumQuia" => FacereEumQuia::class,
        "FacilisMolestiaeIpsam" => FacilisMolestiaeIpsam::class,
        "EnimEiusQui" => EnimEiusQui::class,
        "AsperioresVelVoluptatibus" => AsperioresVelVoluptatibus::class
    ];

    private static $has_many = [
        "SapienteQuaeratQuiss" => SapienteQuaeratQuis::class,
        "NihilCorruptiEiuss" => NihilCorruptiEius::class,
        "DictaEtSits" => DictaEtSit::class,
        "IpsamRecusandaeVoluptatems" => IpsamRecusandaeVoluptatem::class,
        "FugiatQuibusdamEligendis" => FugiatQuibusdamEligendi::class,
        "PerferendisPerspiciatisDolores" => PerferendisPerspiciatisDolore::class,
        "DoloribusSedOccaecatis" => DoloribusSedOccaecati::class,
        "IureHicRerums" => IureHicRerum::class,
        "EosCorruptiDolors" => EosCorruptiDolor::class,
        "IdVoluptatibusVoluptass" => IdVoluptatibusVoluptas::class,
        "DelectusFacilisIncidunts" => DelectusFacilisIncidunt::class,
        "SuscipitAutemNullas" => SuscipitAutemNulla::class,
        "NonEligendiFugits" => NonEligendiFugit::class,
        "QuasiAutemAtques" => QuasiAutemAtque::class,
        "AutAdipisciDeserunts" => AutAdipisciDeserunt::class,
        "EnimAutMinuss" => EnimAutMinus::class,
        "SedRepellendusVelits" => SedRepellendusVelit::class,
        "FacereEumQuias" => FacereEumQuia::class,
        "FacilisMolestiaeIpsams" => FacilisMolestiaeIpsam::class,
        "EnimEiusQuis" => EnimEiusQui::class,
        "AsperioresVelVoluptatibuss" => AsperioresVelVoluptatibus::class
    ];
}