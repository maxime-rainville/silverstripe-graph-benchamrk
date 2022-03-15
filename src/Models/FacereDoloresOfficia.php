<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class FacereDoloresOfficia extends DataObject
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

    private static $table_name = 'FacereDoloresOfficia';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "ConsequaturTotamDelectus" => ConsequaturTotamDelectus::class,
        "QuibusdamExercitationemConsequuntur" => QuibusdamExercitationemConsequuntur::class,
        "FugiatRationeNostrum" => FugiatRationeNostrum::class,
        "VoluptasQuosEt" => VoluptasQuosEt::class,
        "PossimusQuamAut" => PossimusQuamAut::class,
        "InventoreSequiAperiam" => InventoreSequiAperiam::class,
        "EumMagnamSint" => EumMagnamSint::class,
        "EtVeritatisEveniet" => EtVeritatisEveniet::class,
        "VoluptasIlloVoluptates" => VoluptasIlloVoluptates::class,
        "ReprehenderitFugaQuo" => ReprehenderitFugaQuo::class,
        "OmnisInProvident" => OmnisInProvident::class,
        "EumCorporisVelit" => EumCorporisVelit::class,
        "OditDignissimosId" => OditDignissimosId::class,
        "QuidemModiDicta" => QuidemModiDicta::class,
        "QuoDeseruntDolorum" => QuoDeseruntDolorum::class,
        "AsperioresAutemSit" => AsperioresAutemSit::class,
        "InEtDeleniti" => InEtDeleniti::class,
        "QuidemTeneturUt" => QuidemTeneturUt::class,
        "FacereDoloresOfficia" => FacereDoloresOfficia::class,
        "DoloremQuidemVoluptas" => DoloremQuidemVoluptas::class,
        "ModiLaboreFugiat" => ModiLaboreFugiat::class
    ];

    private static $has_many = [
        "ConsequaturTotamDelectuss" => ConsequaturTotamDelectus::class,
        "QuibusdamExercitationemConsequunturs" => QuibusdamExercitationemConsequuntur::class,
        "FugiatRationeNostrums" => FugiatRationeNostrum::class,
        "VoluptasQuosEts" => VoluptasQuosEt::class,
        "PossimusQuamAuts" => PossimusQuamAut::class,
        "InventoreSequiAperiams" => InventoreSequiAperiam::class,
        "EumMagnamSints" => EumMagnamSint::class,
        "EtVeritatisEveniets" => EtVeritatisEveniet::class,
        "VoluptasIlloVoluptatess" => VoluptasIlloVoluptates::class,
        "ReprehenderitFugaQuos" => ReprehenderitFugaQuo::class,
        "OmnisInProvidents" => OmnisInProvident::class,
        "EumCorporisVelits" => EumCorporisVelit::class,
        "OditDignissimosIds" => OditDignissimosId::class,
        "QuidemModiDictas" => QuidemModiDicta::class,
        "QuoDeseruntDolorums" => QuoDeseruntDolorum::class,
        "AsperioresAutemSits" => AsperioresAutemSit::class,
        "InEtDelenitis" => InEtDeleniti::class,
        "QuidemTeneturUts" => QuidemTeneturUt::class,
        "FacereDoloresOfficias" => FacereDoloresOfficia::class,
        "DoloremQuidemVoluptass" => DoloremQuidemVoluptas::class,
        "ModiLaboreFugiats" => ModiLaboreFugiat::class
    ];
}