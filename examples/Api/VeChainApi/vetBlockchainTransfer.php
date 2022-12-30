<?php
/**
 * Copyright (c) 2022-2023 Tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/VeChain#operation/VetBlockchainTransfer
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/VeChainApi.md#vetblockchaintransfer
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_vet_blockchain_transfer_request = new \Tatum\Model\VetBlockchainTransferRequest();

try {
    /** @var \Tatum\Model\TransactionHash $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->veChain()
        ->vetBlockchainTransfer($arg_vet_blockchain_transfer_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->veChain()->vetBlockchainTransfer(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->veChain()->vetBlockchainTransfer(): " . $exc->getMessage() . PHP_EOL;
}