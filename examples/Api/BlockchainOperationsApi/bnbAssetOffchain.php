<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainOperationsApi.md#bnbassetoffchain
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_create_bnb_asset = (new \Tatum\Model\CreateBnbAsset())
    
    // Asset name.
    ->setToken('NNB-B90')
    
    // Base pair for Asset. Transaction value will be calculated according to this base pair. e.g. 1 TOKEN123 is equal to 1 EUR, if basePair is set to EUR.
    ->setBasePair('EUR');

try {
    $sdk->mainnet()
        ->api()
        ->blockchainOperations()
        ->bnbAssetOffchain($arg_create_bnb_asset);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainOperations()->bnbAssetOffchain(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainOperations()->bnbAssetOffchain(): " . $exc->getMessage() . PHP_EOL;
}