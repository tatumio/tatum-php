<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BitcoinApi.md#btctransactionfromaddress
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_btc_transaction_from_address = (new \Tatum\Model\BtcTransactionFromAddress())
    
    // The array of blockchain addresses to send the assets from and their private keys. For each addres...
    ->setFromAddress(null)
    
    // The array of blockchain addresses to send the assets to and the amounts that each address should ...
    ->setTo(null)
    
    // (optional) The fee to be paid for the transaction (in BTC); if you are using this parameter, you have to als...
    ->setFee('0.0015')
    
    // (optional) The blockchain address to send any extra assets remaning after covering the fee to; if you are us...
    ->setChangeAddress('2MzNGwuKvMEvKMQogtgzSqJcH2UW3Tc5oc7');

try {

    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->bitcoin()
        ->btcTransactionFromAddress($arg_btc_transaction_from_address);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->bitcoin()->btcTransactionFromAddress(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->bitcoin()->btcTransactionFromAddress(): %s\n", 
        $exc->getMessage()
    );
}