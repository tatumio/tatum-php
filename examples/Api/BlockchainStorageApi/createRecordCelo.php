<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainStorageApi.md#createrecordcelo
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_create_record_celo = (new \Tatum\Model\CreateRecordCelo())
    
    // The data to be stored on the blockchain
    ->setData('My example log data')
    
    // The blockchain to store the data on
    ->setChain('CELO')
    
    // The private key of the blockchain address from which the transaction will be made and the transaction fee will be deducted
    ->setFromPrivateKey('0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2')
    
    // The currency in which the transaction fee will be paid
    ->setFeeCurrency('null')
    
    // (optional) The blockchain address to store the data on<br/>If not provided, the data will be stored on the address from which the transaction is made.
    ->setTo('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // (optional) The nonce to be set to the transaction; if not present, the last known nonce will be used
    ->setNonce(null);

try {
    /** @var \Tatum\Model\TransactionHash $response */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainStorage()
        ->createRecordCelo($arg_create_record_celo);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainStorage()->createRecordCelo(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainStorage()->createRecordCelo(): " . $exc->getMessage() . PHP_EOL;
}