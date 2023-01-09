<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/BlockchainOperations#operation/TransferBsc
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainOperationsApi.md#transferbsc
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transfer_bsc = new \Tatum\Model\TransferBsc();

try {
    /** @var \Tatum\Model\TransferBtcMnemonic200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->transferBsc($arg_transfer_bsc);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainOperations()->transferBsc(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainOperations()->transferBsc(): " . $exc->getMessage() . PHP_EOL;
}