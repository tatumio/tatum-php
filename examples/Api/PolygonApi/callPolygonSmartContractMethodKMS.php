<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/PolygonApi.md#callpolygonsmartcontractmethodkms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_call_polygon_smart_contract_method_kms = (new \Tatum\Model\CallPolygonSmartContractMethodKMS())
    
    // The address of the smart contract
    ->setContractAddress('0xC9c8ba8C7e2EAF43e84330Db08915A8106d7bD74')
    
    // Name of the method to invoke on smart contract.
    ->setMethodName('transfer')
    
    // ABI of the method to invoke.
    ->setMethodAbi(
        json_decode(
            'null'
        )
    )
    
    // Parameters of the method to be invoked.
    ->setParams(["0x632"])
    
    // (optional) If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic.
    ->setIndex(null)
    
    // Identifier of the private key associated in signing application. Private key, or signature Id must be present.
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    
    // (optional) Nonce to be set to Polygon transaction. If not present, last known nonce will be used.
    ->setNonce(null)
    
    // (optional) 
    ->setFee(null);

try {
    /** @var \Tatum\Model\CallSmartContractMethod200Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->polygon()
        ->callPolygonSmartContractMethodKMS($arg_call_polygon_smart_contract_method_kms);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->polygon()->callPolygonSmartContractMethodKMS(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->polygon()->callPolygonSmartContractMethodKMS(): " . $exc->getMessage() . PHP_EOL;
}