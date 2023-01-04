<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Tron#operation/TronAccountTx20
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/TronApi.md#tronaccounttx20
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// The address of the TRON account to get TRC-20 transactions for
$arg_address = 'TGDqQAP5bduoPKVgdbk7fGyW4DwEt3RRn8';

// The ID of the transaction that follows the last (200<sup>th</sup>) transaction in the returned list of transactions. Use it to get the next 200 transactions for the specified account (for more information, see the description of this API).
$arg_next = '81d0524acf5967f3b361e03fd7d141ab511791cd7aad7ae406c4c8d408290991';

try {
    /** @var \Tatum\Model\TronAccountTx20200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->tron()
        ->tronAccountTx20($arg_address, $arg_next);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->tron()->tronAccountTx20(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->tron()->tronAccountTx20(): " . $exc->getMessage() . PHP_EOL;
}