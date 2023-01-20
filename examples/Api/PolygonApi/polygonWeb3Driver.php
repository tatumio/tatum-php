<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/PolygonApi.md#polygonweb3driver
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// Tatum X-API-Key used for authorization.
$arg_x_api_key = "asdlkfjnqunalkwjfnq2oi303294857k";

$arg_body = array('key' => new \stdClass);

try {

    /**
     * POST /v3/polygon/web3/{xApiKey}
     * 
     * @var object $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->polygon()
        ->polygonWeb3Driver($arg_x_api_key, $arg_body);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->polygon()->polygonWeb3Driver(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->polygon()->polygonWeb3Driver(): %s\n", 
        $exc->getMessage()
    );
}