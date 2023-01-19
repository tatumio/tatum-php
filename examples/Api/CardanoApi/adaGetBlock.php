<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/CardanoApi.md#adagetblock
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk(); /* <<< Set your API keys here */

// Block hash or height.
$arg_hash = "00000000ca231a439a5c0a86a5a5dd6dc1918a8e897b96522fa9499288e70183";

try {

    /** @var \Tatum\Model\AdaBlock $response */
    $response = $sdk->mainnet()
        ->api()
        ->cardano()
        ->adaGetBlock($arg_hash);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->cardano()->adaGetBlock(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->cardano()->adaGetBlock(): %s\n", 
        $exc->getMessage()
    );
}