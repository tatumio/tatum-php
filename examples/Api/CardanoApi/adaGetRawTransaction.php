<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/CardanoApi.md#adagetrawtransaction
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// Transaction hash
$arg_hash = "1451692ebbfbea1a2d2ec6fe6782596b6aa2e46c0589d04c406f491b5b46bc6a";

try {

    /**
     * GET /v3/ada/transaction/{hash}
     * 
     * @var \Tatum\Model\AdaTx $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->cardano()
        ->adaGetRawTransaction($arg_hash);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->cardano()->adaGetRawTransaction(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->cardano()->adaGetRawTransaction(): %s\n", 
        $exc->getMessage()
    );
}