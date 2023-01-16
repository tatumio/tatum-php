<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/AlgorandApi.md#algonodegetdriver
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Tatum X-API-Key used for authorization.
$arg_x_api_key = "asdlkfjnqunalkwjfnq2oi303294857k";

// `**` path of algod.
$arg_algod_path = "v2/accounts";

try {

    /** @var \Tatum\Model\AlgoBlock $response */
    $response = $sdk->mainnet()
        ->api()
        ->algorand()
        ->algoNodeGetDriver($arg_x_api_key, $arg_algod_path);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->algorand()->algoNodeGetDriver(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->algorand()->algoNodeGetDriver(): %s\n", 
        $exc->getMessage()
    );
}