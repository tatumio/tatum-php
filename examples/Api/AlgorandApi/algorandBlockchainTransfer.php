<?php
/**
 * Copyright (c) 2022-2023 Tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Algorand#operation/AlgorandBlockchainTransfer
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/AlgorandApi.md#algorandblockchaintransfer
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_algorand_blockchain_transfer_request = new \Tatum\Model\AlgorandBlockchainTransferRequest();

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->algorand()
        ->algorandBlockchainTransfer($arg_algorand_blockchain_transfer_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->algorand()->algorandBlockchainTransfer(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->algorand()->algorandBlockchainTransfer(): " . $exc->getMessage() . PHP_EOL;
}