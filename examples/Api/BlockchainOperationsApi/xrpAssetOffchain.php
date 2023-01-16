<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainOperationsApi.md#xrpassetoffchain
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_create_xrp_asset = (new \Tatum\Model\CreateXrpAsset())
    
    // Blockchain address of the issuer of the assets.
    ->setIssuerAccount('rsCZjvenhxsFycrb33gPSfXdrTNAS5uiR1')
    
    // Asset name.
    ->setToken('DA39A3EE5E6B4B0D3255BFEF95601890AFD80709')
    
    // Base pair for Asset. Transaction value will be calculated according to this base pair. e.g. 1 TOK...
    ->setBasePair('EUR');

try {

    $sdk->mainnet()
        ->api()
        ->blockchainOperations()
        ->xrpAssetOffchain($arg_create_xrp_asset);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->blockchainOperations()->xrpAssetOffchain(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->blockchainOperations()->xrpAssetOffchain(): %s\n", 
        $exc->getMessage()
    );
}