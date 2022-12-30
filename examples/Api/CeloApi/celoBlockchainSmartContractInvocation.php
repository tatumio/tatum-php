<?php
/**
 * Copyright (c) 2022-2023 Tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Celo#operation/CeloBlockchainSmartContractInvocation
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/CeloApi.md#celoblockchainsmartcontractinvocation
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_celo_blockchain_smart_contract_invocation_request = new \Tatum\Model\CeloBlockchainSmartContractInvocationRequest();

try {
    /** @var \Tatum\Model\EthBlockchainSmartContractInvocation200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->celo()
        ->celoBlockchainSmartContractInvocation($arg_celo_blockchain_smart_contract_invocation_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->celo()->celoBlockchainSmartContractInvocation(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->celo()->celoBlockchainSmartContractInvocation(): " . $exc->getMessage() . PHP_EOL;
}