<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/FlowApi.md#flowtransactionmnemonic
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_flow_transaction_mnemonic = (new \Tatum\Model\FlowTransactionMnemonic())
    
    // Blockchain account to send from
    ->setAccount('0x955cd3f17b2fd8ad')
    
    // Type of asset to send
    ->setCurrency('null')
    
    // Blockchain address to send assets
    ->setTo('0x955cd3f17b2fd8ae')
    
    // Amount to be sent, in Flow.
    ->setAmount('10000')
    
    // Mnemonic to generate private key.
    ->setMnemonic('urge pulp usage sister evidence arrest palm math please chief egg abuse')
    
    // Index to the specific address from mnemonic.
    ->setIndex(null);

try {

    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->flow()
        ->flowTransactionMnemonic($arg_flow_transaction_mnemonic);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->flow()->flowTransactionMnemonic(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->flow()->flowTransactionMnemonic(): %s\n", 
        $exc->getMessage()
    );
}