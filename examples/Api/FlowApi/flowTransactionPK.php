<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/FlowApi.md#flowtransactionpk
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_flow_transaction_pk = (new \Tatum\Model\FlowTransactionPK())
    
    // Blockchain account to send from
    ->setAccount('0x955cd3f17b2fd8ad')
    
    // Type of asset to send
    ->setCurrency('null')
    
    // Blockchain address to send assets
    ->setTo('0x955cd3f17b2fd8ae')
    
    // Amount to be sent, in Flow.
    ->setAmount('10000')
    
    // Secret for account. Secret, or signature Id must be present.
    ->setPrivateKey('37afa218d41d9cd6a2c6f2b96d9eaa3ad96c598252bc50e4d45d62f9356a51f8');

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->flow()
        ->flowTransactionPK($arg_flow_transaction_pk);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->flow()->flowTransactionPK(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->flow()->flowTransactionPK(): " . $exc->getMessage() . PHP_EOL;
}