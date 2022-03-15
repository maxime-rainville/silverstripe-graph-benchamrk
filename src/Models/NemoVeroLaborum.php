<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class NemoVeroLaborum extends DataObject
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

    private static $table_name = 'NemoVeroLaborum';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "SuntQuisEaque" => SuntQuisEaque::class,
        "AperiamEtOdit" => AperiamEtOdit::class,
        "CumqueVoluptasSequi" => CumqueVoluptasSequi::class,
        "CommodiSaepeMolestias" => CommodiSaepeMolestias::class,
        "QuiaUtAspernatur" => QuiaUtAspernatur::class,
        "VoluptatesInciduntPerspiciatis" => VoluptatesInciduntPerspiciatis::class,
        "AutLiberoEst" => AutLiberoEst::class,
        "QuiAliasVero" => QuiAliasVero::class,
        "NesciuntRepellendusCommodi" => NesciuntRepellendusCommodi::class,
        "ConsecteturUtEst" => ConsecteturUtEst::class,
        "NemoVeroLaborum" => NemoVeroLaborum::class,
        "EtFugitUt" => EtFugitUt::class,
        "UtReprehenderitUt" => UtReprehenderitUt::class,
        "IllumTemporaDignissimos" => IllumTemporaDignissimos::class,
        "IpsamOfficiaEsse" => IpsamOfficiaEsse::class,
        "BeataeSitLaudantium" => BeataeSitLaudantium::class,
        "OditMagniExplicabo" => OditMagniExplicabo::class,
        "VeniamQuiRerum" => VeniamQuiRerum::class,
        "ItaqueVoluptatibusUt" => ItaqueVoluptatibusUt::class,
        "EtVoluptasNisi" => EtVoluptasNisi::class,
        "CumBlanditiisRerum" => CumBlanditiisRerum::class
    ];

    private static $has_many = [
        "SuntQuisEaques" => SuntQuisEaque::class,
        "AperiamEtOdits" => AperiamEtOdit::class,
        "CumqueVoluptasSequis" => CumqueVoluptasSequi::class,
        "CommodiSaepeMolestiass" => CommodiSaepeMolestias::class,
        "QuiaUtAspernaturs" => QuiaUtAspernatur::class,
        "VoluptatesInciduntPerspiciatiss" => VoluptatesInciduntPerspiciatis::class,
        "AutLiberoEsts" => AutLiberoEst::class,
        "QuiAliasVeros" => QuiAliasVero::class,
        "NesciuntRepellendusCommodis" => NesciuntRepellendusCommodi::class,
        "ConsecteturUtEsts" => ConsecteturUtEst::class,
        "NemoVeroLaborums" => NemoVeroLaborum::class,
        "EtFugitUts" => EtFugitUt::class,
        "UtReprehenderitUts" => UtReprehenderitUt::class,
        "IllumTemporaDignissimoss" => IllumTemporaDignissimos::class,
        "IpsamOfficiaEsses" => IpsamOfficiaEsse::class,
        "BeataeSitLaudantiums" => BeataeSitLaudantium::class,
        "OditMagniExplicabos" => OditMagniExplicabo::class,
        "VeniamQuiRerums" => VeniamQuiRerum::class,
        "ItaqueVoluptatibusUts" => ItaqueVoluptatibusUt::class,
        "EtVoluptasNisis" => EtVoluptasNisi::class,
        "CumBlanditiisRerums" => CumBlanditiisRerum::class
    ];
}