<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Flow#operation/flowAccountFlowCreateAddressFromPubKeyKMS
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/FlowApi.md#flowaccountflowcreateaddressfrompubkeykms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_flow_create_address_from_pub_key_kms = new \Tatum\Model\FlowCreateAddressFromPubKeyKMS();

try {
    /** @var \Tatum\Model\FlowAccountFlowCreateAddressFromPubKeyMnemonic200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->flow()
        ->flowAccountFlowCreateAddressFromPubKeyKMS($arg_flow_create_address_from_pub_key_kms);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->flow()->flowAccountFlowCreateAddressFromPubKeyKMS(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->flow()->flowAccountFlowCreateAddressFromPubKeyKMS(): " . $exc->getMessage() . PHP_EOL;
}