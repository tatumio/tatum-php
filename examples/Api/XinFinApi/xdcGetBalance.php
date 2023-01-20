<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/XinFinApi.md#xdcgetbalance
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// Account address you want to get balance of
$arg_address = "xdc3223AEB8404C7525FcAA6C512f91e287AE9FfE7B";

try {

    /**
     * GET /v3/xdc/account/balance/{address}
     * 
     * @var \Tatum\Model\XdcGetBalance200Response $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->xinFin()
        ->xdcGetBalance($arg_address);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->xinFin()->xdcGetBalance(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->xinFin()->xdcGetBalance(): %s\n", 
        $exc->getMessage()
    );
}