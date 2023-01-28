<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/BlockchainOperationsApi/#xrpassetoffchain
 * @license MIT
 * @author  Mark Jivko
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

$arg_create_xrp_asset = (new \Tatum\Model\CreateXrpAsset())
    
    // Blockchain address of the issuer of the assets.
    ->setIssuerAccount('rsCZjvenhxsFycrb33gPSfXdrTNAS5uiR1')
    
    // Asset name.
    ->setToken('DA39A3EE5E6B4B0D3255BFEF95601890AFD80709')
    
    // Base pair for Asset. Transaction value will be calculated according to this base pair. e.g. 1 TOK...
    ->setBasePair('EUR');

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * POST /v3/offchain/xrp/asset
     */
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