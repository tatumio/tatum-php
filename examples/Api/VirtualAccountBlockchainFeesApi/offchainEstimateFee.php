<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/VirtualAccountBlockchainFeesApi/#offchainestimatefee
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

$arg_offchain_estimate_fee = (new \Tatum\Model\OffchainEstimateFee())
    
    // Sender account ID
    ->setSenderAccountId('5e68c66581f2ee32bc354087')
    
    // Blockchain address to send assets to. For BTC, LTC, and DOGE, it is possible to enter list of mul...
    ->setAddress('mpTwPdF8up9kidgcAStriUPwRdnE9MRAg7')
    
    // Amount to be withdrawn to blockchain.
    ->setAmount('0.001')
    
    // (optional) For BTC, LTC, and DOGE, it is possible to enter list of multiple recipient blockchain amounts. Li...
    ->setMultipleAmounts(null)
    
    // (optional) Used to parametrize withdrawal as a change address for left coins from transaction. XPub or attr ...
    ->setAttr('null')
    
    // (optional) Extended public key (xpub) of the wallet associated with the accounts.
    ->setXpub('xpub6EsCk1uU6cJzqvP9CdsTiJwT2rF748YkPnhv5Qo8q44DG7nn2vbyt48YRsNSUYS44jFCW9gwvD9kLQu9AuqXpTpM1c5hgg9PsuBLdeNncid');

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * POST /v3/offchain/blockchain/estimate
     * 
     * @var \Tatum\Model\FeeBtc $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->virtualAccountBlockchainFees()
        ->offchainEstimateFee($arg_offchain_estimate_fee);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->virtualAccountBlockchainFees()->offchainEstimateFee(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->virtualAccountBlockchainFees()->offchainEstimateFee(): %s\n", 
        $exc->getMessage()
    );
}