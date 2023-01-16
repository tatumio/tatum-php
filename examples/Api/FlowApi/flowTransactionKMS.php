<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/FlowApi.md#flowtransactionkms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_flow_transaction_kms = (new \Tatum\Model\FlowTransactionKMS())
    
    // Blockchain account to send from
    ->setAccount('0x955cd3f17b2fd8ad')
    
    // Type of asset to send
    ->setCurrency('null')
    
    // Blockchain address to send assets
    ->setTo('0x955cd3f17b2fd8ae')
    
    // Amount to be sent, in Flow.
    ->setAmount('10000')
    
    // Identifier of the secret associated in signing application. Secret, or signature Id must be present.
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    
    // (optional) If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic.
    ->setIndex(null);

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->flow()
        ->flowTransactionKMS($arg_flow_transaction_kms);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->flow()->flowTransactionKMS(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->flow()->flowTransactionKMS(): " . $exc->getMessage() . PHP_EOL;
}