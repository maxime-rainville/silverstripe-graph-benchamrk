<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class PossimusEtConsectetur extends DataObject
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

    private static $table_name = 'PossimusEtConsectetur';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "IlloDolorumOfficiis" => IlloDolorumOfficiis::class,
        "AliquamExpeditaAssumenda" => AliquamExpeditaAssumenda::class,
        "PossimusEtConsectetur" => PossimusEtConsectetur::class,
        "ConsequunturMinusQui" => ConsequunturMinusQui::class,
        "OfficiaLaboriosamVero" => OfficiaLaboriosamVero::class,
        "AutemMagniTemporibus" => AutemMagniTemporibus::class,
        "IllumNatusFugiat" => IllumNatusFugiat::class,
        "OfficiisInCommodi" => OfficiisInCommodi::class,
        "SuntRecusandaeNihil" => SuntRecusandaeNihil::class,
        "VoluptasLaborumOfficiis" => VoluptasLaborumOfficiis::class,
        "EstIustoLaborum" => EstIustoLaborum::class,
        "UtMaximeVeritatis" => UtMaximeVeritatis::class,
        "DictaVitaeOmnis" => DictaVitaeOmnis::class,
        "DoloribusEnimEt" => DoloribusEnimEt::class,
        "ConsequunturConsequaturLabore" => ConsequunturConsequaturLabore::class,
        "VelQuasiEa" => VelQuasiEa::class,
        "InventoreEosReiciendis" => InventoreEosReiciendis::class,
        "AccusantiumMolestiaeError" => AccusantiumMolestiaeError::class,
        "QuiReprehenderitOfficia" => QuiReprehenderitOfficia::class,
        "ExercitationemSapienteAutem" => ExercitationemSapienteAutem::class,
        "NamIdDolorum" => NamIdDolorum::class
    ];

    private static $has_many = [
        "IlloDolorumOfficiiss" => IlloDolorumOfficiis::class,
        "AliquamExpeditaAssumendas" => AliquamExpeditaAssumenda::class,
        "PossimusEtConsecteturs" => PossimusEtConsectetur::class,
        "ConsequunturMinusQuis" => ConsequunturMinusQui::class,
        "OfficiaLaboriosamVeros" => OfficiaLaboriosamVero::class,
        "AutemMagniTemporibuss" => AutemMagniTemporibus::class,
        "IllumNatusFugiats" => IllumNatusFugiat::class,
        "OfficiisInCommodis" => OfficiisInCommodi::class,
        "SuntRecusandaeNihils" => SuntRecusandaeNihil::class,
        "VoluptasLaborumOfficiiss" => VoluptasLaborumOfficiis::class,
        "EstIustoLaborums" => EstIustoLaborum::class,
        "UtMaximeVeritatiss" => UtMaximeVeritatis::class,
        "DictaVitaeOmniss" => DictaVitaeOmnis::class,
        "DoloribusEnimEts" => DoloribusEnimEt::class,
        "ConsequunturConsequaturLabores" => ConsequunturConsequaturLabore::class,
        "VelQuasiEas" => VelQuasiEa::class,
        "InventoreEosReiciendiss" => InventoreEosReiciendis::class,
        "AccusantiumMolestiaeErrors" => AccusantiumMolestiaeError::class,
        "QuiReprehenderitOfficias" => QuiReprehenderitOfficia::class,
        "ExercitationemSapienteAutems" => ExercitationemSapienteAutem::class,
        "NamIdDolorums" => NamIdDolorum::class
    ];
}