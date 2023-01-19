<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/CardanoApi.md#adatransactionfromutxo
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk(); /* <<< Set your API keys here */

$arg_ada_transaction_from_utxo = (new \Tatum\Model\AdaTransactionFromUTXO())
    
    // The array of transaction hashes, indexes of its UTXOs, and the private keys of the associated blo...
    ->setFromUtxo(null)
    
    // The array of blockchain addresses to send the assets to and the amounts that each address should ...
    ->setTo(null)
    
    // (optional) The fee to be paid for the transaction (in ADA); if you are using this parameter, you have to als...
    ->setFee('0.0015')
    
    // (optional) The blockchain address to send any extra assets remaning after covering the fee; if you are using...
    ->setChangeAddress('2MzNGwuKvMEvKMQogtgzSqJcH2UW3Tc5oc7');

try {

    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->cardano()
        ->adaTransactionFromUTXO($arg_ada_transaction_from_utxo);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->cardano()->adaTransactionFromUTXO(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->cardano()->adaTransactionFromUTXO(): %s\n", 
        $exc->getMessage()
    );
}