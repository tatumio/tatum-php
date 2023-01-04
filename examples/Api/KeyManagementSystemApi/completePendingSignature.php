<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/KeyManagementSystem#operation/CompletePendingSignature
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/KeyManagementSystemApi.md#completependingsignature
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// ID of pending transaction
$arg_id = 'f91827364f91827364ajdur7';

// transaction ID of blockchain transaction
$arg_tx_id = '0x94Ce79B9F001E25BBEbE7C01998A78F7B27D1326';

try {
        $sdk
        ->mainnet()
        ->api()
        ->keyManagementSystem()
        ->completePendingSignature($arg_id, $arg_tx_id);} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->keyManagementSystem()->completePendingSignature(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->keyManagementSystem()->completePendingSignature(): " . $exc->getMessage() . PHP_EOL;
}