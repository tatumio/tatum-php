<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/WithdrawalApi.md#broadcastblockchaintransaction
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_broadcast_withdrawal = new \Tatum\Model\BroadcastWithdrawal();

try {
    /** @var \Tatum\Model\BroadcastResponse $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->withdrawal()
        ->broadcastBlockchainTransaction($arg_broadcast_withdrawal);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->withdrawal()->broadcastBlockchainTransaction(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->withdrawal()->broadcastBlockchainTransaction(): " . $exc->getMessage() . PHP_EOL;
}