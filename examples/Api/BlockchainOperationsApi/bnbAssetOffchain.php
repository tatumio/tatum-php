<?php
/**
 * Copyright (c) 2022-2023 Tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/BlockchainOperations#operation/BnbAssetOffchain
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

$arg_create_bnb_asset = new \Tatum\Model\CreateBnbAsset();

try {
        $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->bnbAssetOffchain($arg_create_bnb_asset);} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainOperations()->bnbAssetOffchain(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainOperations()->bnbAssetOffchain(): " . $exc->getMessage() . PHP_EOL;
}