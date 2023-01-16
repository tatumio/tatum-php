<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/PolygonApi.md#callpolygonsmartcontractreadmethod
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_call_polygon_smart_contract_read_method = (new \Tatum\Model\CallPolygonSmartContractReadMethod())
    
    // The address of the smart contract
    ->setContractAddress('0xC9c8ba8C7e2EAF43e84330Db08915A8106d7bD74')
    
    // Name of the method to invoke on smart contract.
    ->setMethodName('transfer')
    
    // ABI of the method to invoke.
    ->setMethodAbi(
        json_decode(
            '{"inputs":[{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"stake","outputs":[],"stateMutability":"nonpayable","type":"function"}'
        )
    )
    
    // 
    ->setParams(["0x632"]);

try {

    /** @var \Tatum\Model\CallSmartContractMethod200Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->polygon()
        ->callPolygonSmartContractReadMethod($arg_call_polygon_smart_contract_read_method);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->polygon()->callPolygonSmartContractReadMethod(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->polygon()->callPolygonSmartContractReadMethod(): %s\n", 
        $exc->getMessage()
    );
}