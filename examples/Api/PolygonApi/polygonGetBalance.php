<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/PolygonApi.md#polygongetbalance
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk(); /* <<< Set your API keys here */

// Account address you want to get balance of
$arg_address = "0x3223AEB8404C7525FcAA6C512f91e287AE9FfE7B";

try {

    /** @var \Tatum\Model\MaticBalance $response */
    $response = $sdk->mainnet()
        ->api()
        ->polygon()
        ->polygonGetBalance($arg_address);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->polygon()->polygonGetBalance(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->polygon()->polygonGetBalance(): %s\n", 
        $exc->getMessage()
    );
}