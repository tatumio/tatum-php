<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/WithdrawalApi/#broadcastblockchaintransaction
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

$arg_broadcast_withdrawal = (new \Tatum\Model\BroadcastWithdrawal())
    
    // Currency of signed transaction to be broadcast, BTC, LTC, DOGE, BNB, XLM, TRX, BCH, ETH, XRP, ERC...
    ->setCurrency('BTC')
    
    // Raw signed transaction to be published to network.
    ->setTxData('62BD544D1B9031EFC330A3E855CC3A0D51CA5131455C1AB3BCAC6D243F65460D')
    
    // (optional) Withdrawal ID to be completed by transaction broadcast
    ->setWithdrawalId('5e68c66581f2ee32bc354087')
    
    // (optional) ID of prepared payment template to sign. This is should be stored on a client side to retrieve ID...
    ->setSignatureId('1f7f7c0c-3906-4aa1-9dfe-4b67c43918f6');

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * POST /v3/offchain/withdrawal/broadcast
     * 
     * @var \Tatum\Model\BroadcastResponse $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->withdrawal()
        ->broadcastBlockchainTransaction($arg_broadcast_withdrawal);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->withdrawal()->broadcastBlockchainTransaction(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->withdrawal()->broadcastBlockchainTransaction(): %s\n", 
        $exc->getMessage()
    );
}