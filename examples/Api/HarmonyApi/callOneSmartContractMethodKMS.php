<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/HarmonyApi.md#callonesmartcontractmethodkms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_call_one_smart_contract_method_kms = (new \Tatum\Model\CallOneSmartContractMethodKMS())
    ->setContractAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    ->setMethodName('transfer')
    ->setMethodAbi(
        json_decode(
            'null'
        )
    )
    ->setParams(["0x632"])
    ->setIndex(null)/* optional */
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    ->setNonce(null)/* optional */
    ->setFee(null)/* optional */;

// Shard to read data from
$arg_shard_id = 0;

try {
    /** @var \Tatum\Model\CallSmartContractMethod200Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->harmony()
        ->callOneSmartContractMethodKMS($arg_call_one_smart_contract_method_kms, $arg_shard_id);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->harmony()->callOneSmartContractMethodKMS(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->harmony()->callOneSmartContractMethodKMS(): " . $exc->getMessage() . PHP_EOL;
}