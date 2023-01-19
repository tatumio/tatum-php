<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/KlaytnApi.md#klaytngettransactioncount
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk(); /* <<< Set your API keys here */

// address
$arg_address = "0xdac17f958d2ee523a2206206994597c13d831ec7";

try {

    /** @var float $response */
    $response = $sdk->mainnet()
        ->api()
        ->klaytn()
        ->klaytnGetTransactionCount($arg_address);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->klaytn()->klaytnGetTransactionCount(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->klaytn()->klaytnGetTransactionCount(): %s\n", 
        $exc->getMessage()
    );
}