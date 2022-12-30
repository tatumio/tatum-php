<?php
/**
 * Copyright (c) 2022-2023 Tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Tron#operation/TronGetBlock
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/TronApi.md#trongetblock
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Block hash or height.
$arg_hash = '000000000195a8cfe2ea4ca60ce921b30e95980a96c6bb1da4a35aa03da9c5a8';

try {
    /** @var \Tatum\Model\TronBlock $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->tron()
        ->tronGetBlock($arg_hash);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->tron()->tronGetBlock(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->tron()->tronGetBlock(): " . $exc->getMessage() . PHP_EOL;
}