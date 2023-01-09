<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Stellar#operation/TransferXlmBlockchainKMS
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/StellarApi.md#transferxlmblockchainkms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transfer_xlm_blockchain_kms = new \Tatum\Model\TransferXlmBlockchainKMS();

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->stellar()
        ->transferXlmBlockchainKMS($arg_transfer_xlm_blockchain_kms);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->stellar()->transferXlmBlockchainKMS(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->stellar()->transferXlmBlockchainKMS(): " . $exc->getMessage() . PHP_EOL;
}