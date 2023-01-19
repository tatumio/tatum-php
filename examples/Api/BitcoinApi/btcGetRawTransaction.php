<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BitcoinApi.md#btcgetrawtransaction
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk(); /* <<< Set your API keys here */

// Transaction hash
$arg_hash = "1451692ebbfbea1a2d2ec6fe6782596b6aa2e46c0589d04c406f491b5b46bc6a";

try {

    /** @var \Tatum\Model\BtcTx $response */
    $response = $sdk->mainnet()
        ->api()
        ->bitcoin()
        ->btcGetRawTransaction($arg_hash);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->bitcoin()->btcGetRawTransaction(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->bitcoin()->btcGetRawTransaction(): %s\n", 
        $exc->getMessage()
    );
}