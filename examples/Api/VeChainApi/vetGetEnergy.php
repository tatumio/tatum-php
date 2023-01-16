<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/VeChainApi.md#vetgetenergy
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Account address you want to get balance of
$arg_address = "0x5034aa590125b64023a0262112b98d72e3c8e40e";

try {

    /** @var \Tatum\Model\VetGetEnergy200Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->veChain()
        ->vetGetEnergy($arg_address);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->veChain()->vetGetEnergy(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->veChain()->vetGetEnergy(): %s\n", 
        $exc->getMessage()
    );
}