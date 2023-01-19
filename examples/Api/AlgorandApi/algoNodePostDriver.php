<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/AlgorandApi.md#algonodepostdriver
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk(); /* <<< Set your API keys here */

// Tatum X-API-Key used for authorization.
$arg_x_api_key = "asdlkfjnqunalkwjfnq2oi303294857k";

// `**` path of algod.
$arg_algod_path = "v2/accounts";

$arg_algo_node_post_driver_request = (new \Tatum\Model\AlgoNodePostDriverRequest())
    
    // (optional) Check here - <a href="https://developer.algorand.org/docs/rest-apis/algod/v2/#post-v2transactions...
    ->setRawtxn('null');

try {

    /** @var \Tatum\Model\AlgoNodePostDriver200Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->algorand()
        ->algoNodePostDriver($arg_x_api_key, $arg_algod_path, $arg_algo_node_post_driver_request);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->algorand()->algoNodePostDriver(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->algorand()->algoNodePostDriver(): %s\n", 
        $exc->getMessage()
    );
}