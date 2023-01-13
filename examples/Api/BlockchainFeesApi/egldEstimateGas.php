<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainFeesApi.md#egldestimategas
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transaction_fee_egld_blockchain = (new \Tatum\Model\TransactionFeeEgldBlockchain())
    ->setSender('erd17k95m339aqzxzyvjjjfa3lka0yyeqgcsda50tw5z9g73ycfe2caq9e6jq7')
    ->setReceiver('erd17k95m339aqzxzyvjjjfa3lka0yyeqgcsda50tw5z9g73ycfe2caq9e6jq6')
    ->setValue('0.1')
    ->setData('4d79206e6f746520746f2074686520726563697069656e74')/* optional */;

try {
    /** @var \Tatum\Model\EgldEstimateGas200Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainFees()
        ->egldEstimateGas($arg_transaction_fee_egld_blockchain);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainFees()->egldEstimateGas(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainFees()->egldEstimateGas(): " . $exc->getMessage() . PHP_EOL;
}