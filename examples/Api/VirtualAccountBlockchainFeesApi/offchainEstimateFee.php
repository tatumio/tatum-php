<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/VirtualAccountBlockchainFeesApi.md#offchainestimatefee
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_offchain_estimate_fee = (new \Tatum\Model\OffchainEstimateFee())
    
    // Sender account ID
    ->setSenderAccountId('5e68c66581f2ee32bc354087')
    
    // Blockchain address to send assets to. For BTC, LTC, and DOGE, it is possible to enter list of multiple recipient blockchain addresses as a comma separated string.
    ->setAddress('mpTwPdF8up9kidgcAStriUPwRdnE9MRAg7')
    
    // Amount to be withdrawn to blockchain.
    ->setAmount('0.001')
    
    // (optional) For BTC, LTC, and DOGE, it is possible to enter list of multiple recipient blockchain amounts. List of recipient addresses must be present in the address field and total sum of amounts must be equal to the amount field.
    ->setMultipleAmounts(null)
    
    // (optional) Used to parametrize withdrawal as a change address for left coins from transaction. XPub or attr must be used.
    ->setAttr('null')
    
    // (optional) Extended public key (xpub) of the wallet associated with the accounts.
    ->setXpub('xpub6EsCk1uU6cJzqvP9CdsTiJwT2rF748YkPnhv5Qo8q44DG7nn2vbyt48YRsNSUYS44jFCW9gwvD9kLQu9AuqXpTpM1c5hgg9PsuBLdeNncid');

try {
    /** @var \Tatum\Model\FeeBtc $response */
    $response = $sdk->mainnet()
        ->api()
        ->virtualAccountBlockchainFees()
        ->offchainEstimateFee($arg_offchain_estimate_fee);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->virtualAccountBlockchainFees()->offchainEstimateFee(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->virtualAccountBlockchainFees()->offchainEstimateFee(): " . $exc->getMessage() . PHP_EOL;
}