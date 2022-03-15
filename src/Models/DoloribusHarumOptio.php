<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DoloribusHarumOptio extends DataObject
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

    private static $table_name = 'DoloribusHarumOptio';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "DucimusLaborumLabore" => DucimusLaborumLabore::class,
        "OfficiaArchitectoConsequatur" => OfficiaArchitectoConsequatur::class,
        "VoluptatemErrorEst" => VoluptatemErrorEst::class,
        "AnimiAccusamusDolorem" => AnimiAccusamusDolorem::class,
        "ArchitectoQuaeEt" => ArchitectoQuaeEt::class,
        "EtVeritatisQui" => EtVeritatisQui::class,
        "EstOmnisConsequuntur" => EstOmnisConsequuntur::class,
        "AutEtDolores" => AutEtDolores::class,
        "AliquamAutAut" => AliquamAutAut::class,
        "DoloribusHarumOptio" => DoloribusHarumOptio::class,
        "SintAutSequi" => SintAutSequi::class,
        "TemporeNisiAperiam" => TemporeNisiAperiam::class,
        "QuaeratFugaNecessitatibus" => QuaeratFugaNecessitatibus::class,
        "DelectusLaboreSit" => DelectusLaboreSit::class,
        "NamReprehenderitQuam" => NamReprehenderitQuam::class,
        "QuodEtId" => QuodEtId::class,
        "EosNihilOccaecati" => EosNihilOccaecati::class,
        "FugitNisiEt" => FugitNisiEt::class,
        "UtUllamRerum" => UtUllamRerum::class,
        "FacereEumAut" => FacereEumAut::class,
        "RepudiandaeDoloribusDistinctio" => RepudiandaeDoloribusDistinctio::class
    ];

    private static $has_many = [
        "DucimusLaborumLabores" => DucimusLaborumLabore::class,
        "OfficiaArchitectoConsequaturs" => OfficiaArchitectoConsequatur::class,
        "VoluptatemErrorEsts" => VoluptatemErrorEst::class,
        "AnimiAccusamusDolorems" => AnimiAccusamusDolorem::class,
        "ArchitectoQuaeEts" => ArchitectoQuaeEt::class,
        "EtVeritatisQuis" => EtVeritatisQui::class,
        "EstOmnisConsequunturs" => EstOmnisConsequuntur::class,
        "AutEtDoloress" => AutEtDolores::class,
        "AliquamAutAuts" => AliquamAutAut::class,
        "DoloribusHarumOptios" => DoloribusHarumOptio::class,
        "SintAutSequis" => SintAutSequi::class,
        "TemporeNisiAperiams" => TemporeNisiAperiam::class,
        "QuaeratFugaNecessitatibuss" => QuaeratFugaNecessitatibus::class,
        "DelectusLaboreSits" => DelectusLaboreSit::class,
        "NamReprehenderitQuams" => NamReprehenderitQuam::class,
        "QuodEtIds" => QuodEtId::class,
        "EosNihilOccaecatis" => EosNihilOccaecati::class,
        "FugitNisiEts" => FugitNisiEt::class,
        "UtUllamRerums" => UtUllamRerum::class,
        "FacereEumAuts" => FacereEumAut::class,
        "RepudiandaeDoloribusDistinctios" => RepudiandaeDoloribusDistinctio::class
    ];
}