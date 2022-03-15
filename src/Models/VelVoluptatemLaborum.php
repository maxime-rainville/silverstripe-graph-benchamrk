<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VelVoluptatemLaborum extends DataObject
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

    private static $table_name = 'VelVoluptatemLaborum';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "DelectusUllamIllo" => DelectusUllamIllo::class,
        "VelVoluptatemLaborum" => VelVoluptatemLaborum::class,
        "IllumExQui" => IllumExQui::class,
        "AsperioresAccusantiumConsectetur" => AsperioresAccusantiumConsectetur::class,
        "VoluptatibusAutemMolestias" => VoluptatibusAutemMolestias::class,
        "QuiaVoluptatemIste" => QuiaVoluptatemIste::class,
        "DeseruntRerumCupiditate" => DeseruntRerumCupiditate::class,
        "VoluptatemQuiaUt" => VoluptatemQuiaUt::class,
        "VeritatisAutAlias" => VeritatisAutAlias::class,
        "RecusandaeAperiamEt" => RecusandaeAperiamEt::class,
        "SuscipitArchitectoEsse" => SuscipitArchitectoEsse::class,
        "OccaecatiEtAsperiores" => OccaecatiEtAsperiores::class,
        "AliasInRepellendus" => AliasInRepellendus::class,
        "DoloresMinusSint" => DoloresMinusSint::class,
        "IdHicError" => IdHicError::class,
        "FugitDeseruntIllo" => FugitDeseruntIllo::class,
        "EnimVitaeSaepe" => EnimVitaeSaepe::class,
        "QuidemAspernaturHic" => QuidemAspernaturHic::class,
        "PariaturImpeditDignissimos" => PariaturImpeditDignissimos::class,
        "SuntQuoBeatae" => SuntQuoBeatae::class,
        "EarumSintDolor" => EarumSintDolor::class
    ];

    private static $has_many = [
        "DelectusUllamIllos" => DelectusUllamIllo::class,
        "VelVoluptatemLaborums" => VelVoluptatemLaborum::class,
        "IllumExQuis" => IllumExQui::class,
        "AsperioresAccusantiumConsecteturs" => AsperioresAccusantiumConsectetur::class,
        "VoluptatibusAutemMolestiass" => VoluptatibusAutemMolestias::class,
        "QuiaVoluptatemIstes" => QuiaVoluptatemIste::class,
        "DeseruntRerumCupiditates" => DeseruntRerumCupiditate::class,
        "VoluptatemQuiaUts" => VoluptatemQuiaUt::class,
        "VeritatisAutAliass" => VeritatisAutAlias::class,
        "RecusandaeAperiamEts" => RecusandaeAperiamEt::class,
        "SuscipitArchitectoEsses" => SuscipitArchitectoEsse::class,
        "OccaecatiEtAsperioress" => OccaecatiEtAsperiores::class,
        "AliasInRepellenduss" => AliasInRepellendus::class,
        "DoloresMinusSints" => DoloresMinusSint::class,
        "IdHicErrors" => IdHicError::class,
        "FugitDeseruntIllos" => FugitDeseruntIllo::class,
        "EnimVitaeSaepes" => EnimVitaeSaepe::class,
        "QuidemAspernaturHics" => QuidemAspernaturHic::class,
        "PariaturImpeditDignissimoss" => PariaturImpeditDignissimos::class,
        "SuntQuoBeataes" => SuntQuoBeatae::class,
        "EarumSintDolors" => EarumSintDolor::class
    ];
}