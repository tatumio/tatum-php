<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainOperationsApi.md#xlmassetoffchain
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_create_xlm_asset = (new \Tatum\Model\CreateXlmAsset())
    
    // Blockchain address of the issuer of the assets.
    ->setIssuerAccount('GC5LAVZ5UPLIFDH6SI33PNVL5TKWA4ODXTI3WEF5JM6LRM5MNGVJ56TT')
    
    // Asset name.
    ->setToken('TOKEN123')
    
    // Base pair for Asset. Transaction value will be calculated according to this base pair. e.g. 1 TOKEN123 is equal to 1 EUR, if basePair is set to EUR.
    ->setBasePair('EUR');

try {
    $sdk->mainnet()
        ->api()
        ->blockchainOperations()
        ->xlmAssetOffchain($arg_create_xlm_asset);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainOperations()->xlmAssetOffchain(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainOperations()->xlmAssetOffchain(): " . $exc->getMessage() . PHP_EOL;
}