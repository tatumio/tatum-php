<?php
/**
 * Copyright (c) 2022-2023 Tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Dogecoin#operation/DogeGetRawTransaction
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/DogecoinApi.md#dogegetrawtransaction
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Transaction hash
$arg_hash = 'd60631d8e5c8b6eb0557b5181cf28564d771c628a08abc414e87ad7c05ff2fc2';

try {
    /** @var \Tatum\Model\DogeTx $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->dogecoin()
        ->dogeGetRawTransaction($arg_hash);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->dogecoin()->dogeGetRawTransaction(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->dogecoin()->dogeGetRawTransaction(): " . $exc->getMessage() . PHP_EOL;
}