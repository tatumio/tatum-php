<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/TronApi.md#trontrc10detail
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// The ID of the TRC-10 token or the address of the token's owner
$arg_id_or_owner_address = "1000540";

try {
    /** @var \Tatum\Model\TronTrc10Detail $response */
    $response = $sdk->mainnet()
        ->api()
        ->tron()
        ->tronTrc10Detail($arg_id_or_owner_address);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->tron()->tronTrc10Detail(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->tron()->tronTrc10Detail(): " . $exc->getMessage() . PHP_EOL;
}