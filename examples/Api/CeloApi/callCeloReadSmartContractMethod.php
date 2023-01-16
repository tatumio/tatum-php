<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/CeloApi.md#callceloreadsmartcontractmethod
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_call_celo_read_smart_contract_method = (new \Tatum\Model\CallCeloReadSmartContractMethod())
    
    // The address of the smart contract
    ->setContractAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // Name of the method to invoke on smart contract.
    ->setMethodName('transfer')
    
    // ABI of the method to invoke.
    ->setMethodAbi(
        json_decode(
            '{"inputs":[{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"stake","outputs":[],"stateMutability":"nonpayable","type":"function"}'
        )
    )
    
    // Parameters of the method to be invoked.
    ->setParams(["0x632"]);

try {
    /** @var \Tatum\Model\CallSmartContractMethod200Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->celo()
        ->callCeloReadSmartContractMethod($arg_call_celo_read_smart_contract_method);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->celo()->callCeloReadSmartContractMethod(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->celo()->callCeloReadSmartContractMethod(): " . $exc->getMessage() . PHP_EOL;
}