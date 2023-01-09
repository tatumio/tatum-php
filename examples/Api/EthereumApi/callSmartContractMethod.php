<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Ethereum#operation/CallSmartContractMethod
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/EthereumApi.md#callsmartcontractmethod
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_call_smart_contract_method = new \Tatum\Model\CallSmartContractMethod();

// Type of Ethereum testnet. Defaults to ethereum-sepolia.
$arg_x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\CallSmartContractMethod200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->ethereum()
        ->callSmartContractMethod($arg_call_smart_contract_method, $arg_x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->ethereum()->callSmartContractMethod(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->ethereum()->callSmartContractMethod(): " . $exc->getMessage() . PHP_EOL;
}