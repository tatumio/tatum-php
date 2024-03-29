<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/PolygonApi/#callpolygonsmartcontractmethodcaller
 * @license MIT
 * @author  Mark Jivko
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// 🐛 Enable debugging on the MainNet
$sdk->mainnet()->config()->setDebug(true);

$arg_call_polygon_smart_contract_method_caller = (new \Tatum\Model\CallPolygonSmartContractMethodCaller())
    
    // The address of the account, which will be sender and fee payer of this transaction
    ->setCaller('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // The address of the smart contract
    ->setContractAddress('0xC9c8ba8C7e2EAF43e84330Db08915A8106d7bD74')
    
    // (optional) Amount of the assets to be sent.
    ->setAmount('100000')
    
    // Name of the method to invoke on smart contract.
    ->setMethodName('transfer')
    
    // ABI of the method to invoke.
    ->setMethodAbi(
        json_decode(
            '{"inputs":[{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"stake","outputs":[],"stateMutability":"nonpayable","type":"function"}'
        )
    )
    
    // string[]
    ->setParams(["0x632"])
    
    // (optional) \Tatum\Model\CustomFee
    ->setFee(null);

try {

    /**
     * POST /v3/polygon/smartcontract
     * 
     * @var \Tatum\Model\CallSmartContractMethod200Response $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->polygon()
        ->callPolygonSmartContractMethodCaller($arg_call_polygon_smart_contract_method_caller);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->polygon()->callPolygonSmartContractMethodCaller(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->polygon()->callPolygonSmartContractMethodCaller(): %s\n", 
        $exc->getMessage()
    );
}