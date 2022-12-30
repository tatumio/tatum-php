<?php
/**
 * Copyright (c) 2022-2023 Tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/ServiceUtils#operation/unfreezeApiKey
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/ServiceUtilsApi.md#unfreezeapikey
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

try {
        $sdk
        ->mainnet()
        ->api()
        ->serviceUtils()
        ->unfreezeApiKey();} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->serviceUtils()->unfreezeApiKey(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->serviceUtils()->unfreezeApiKey(): " . $exc->getMessage() . PHP_EOL;
}