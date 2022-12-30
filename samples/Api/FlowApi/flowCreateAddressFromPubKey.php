<?php
/**
 * Copyright (c) 2022-2023 Tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Flow#operation/FlowCreateAddressFromPubKey
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/FlowApi.md#flowcreateaddressfrompubkey
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_flow_create_address_from_pub_key_request = new \Tatum\Model\FlowCreateAddressFromPubKeyRequest();

try {
    /** @var \Tatum\Model\FlowCreateAddressFromPubKey200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->flow()
        ->flowCreateAddressFromPubKey($arg_flow_create_address_from_pub_key_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->flow()->flowCreateAddressFromPubKey(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->flow()->flowCreateAddressFromPubKey(): " . $exc->getMessage() . PHP_EOL;
}