<?php
/**
 * Copyright (c) 2022-2023 Tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Algorand#operation/AlgorandGenerateAddress
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/AlgorandApi.md#algorandgenerateaddress
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// private key of wallet.
$arg_priv = 'NBYMCVEEDFYV3TPWVRE6APE7PKHUJD4XAKXCKNCLKGUXOC3LFNJGZQCJCRA53HB7ZAHF6NFJH2QIVQ5USQNWG35QCJLD4KZ5IWMB24Q';

try {
    /** @var \Tatum\Model\AlgorandGenerateAddress200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->algorand()
        ->algorandGenerateAddress($arg_priv);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->algorand()->algorandGenerateAddress(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->algorand()->algorandGenerateAddress(): " . $exc->getMessage() . PHP_EOL;
}