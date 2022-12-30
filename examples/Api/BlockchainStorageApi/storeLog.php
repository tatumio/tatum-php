<?php
/**
 * Copyright (c) 2022-2023 Tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/BlockchainStorage#operation/StoreLog
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainStorageApi.md#storelog
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_store_log_request = new \Tatum\Model\StoreLogRequest();

try {
    /** @var \Tatum\Model\TransactionHash $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainStorage()
        ->storeLog($arg_store_log_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainStorage()->storeLog(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainStorage()->storeLog(): " . $exc->getMessage() . PHP_EOL;
}