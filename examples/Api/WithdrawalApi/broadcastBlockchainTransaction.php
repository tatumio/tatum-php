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

$arg_broadcast_withdrawal = (new \Tatum\Model\BroadcastWithdrawal())
    ->setCurrency('BTC')
    ->setTxData('62BD544D1B9031EFC330A3E855CC3A0D51CA5131455C1AB3BCAC6D243F65460D')
    ->setWithdrawalId('5e68c66581f2ee32bc354087')/* optional */
    ->setSignatureId('1f7f7c0c-3906-4aa1-9dfe-4b67c43918f6')/* optional */;

try {
    /** @var \Tatum\Model\BroadcastResponse $response */
    $response = $sdk->mainnet()
        ->api()
        ->withdrawal()
        ->broadcastBlockchainTransaction($arg_broadcast_withdrawal);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->withdrawal()->broadcastBlockchainTransaction(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->withdrawal()->broadcastBlockchainTransaction(): " . $exc->getMessage() . PHP_EOL;
}