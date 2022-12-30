<?php
/**
 * Copyright (c) 2022-2023 Tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Tron#operation/TronGetAccount
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/TronApi.md#trongetaccount
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Account address.
$arg_address = 'TGDqQAP5bduoPKVgdbk7fGyW4DwEt3RRn8';

try {
    /** @var \Tatum\Model\TronAccount $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->tron()
        ->tronGetAccount($arg_address);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->tron()->tronGetAccount(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->tron()->tronGetAccount(): " . $exc->getMessage() . PHP_EOL;
}