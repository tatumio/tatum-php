<?php
/**
 * Copyright (c) 2022-2023 Tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/BitcoinCash#operation/BchGenerateAddressPrivateKey
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BitcoinCashApi.md#bchgenerateaddressprivatekey
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_priv_key_request = new \Tatum\Model\PrivKeyRequest();

try {
    /** @var \Tatum\Model\PrivKey $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->bitcoinCash()
        ->bchGenerateAddressPrivateKey($arg_priv_key_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->bitcoinCash()->bchGenerateAddressPrivateKey(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->bitcoinCash()->bchGenerateAddressPrivateKey(): " . $exc->getMessage() . PHP_EOL;
}