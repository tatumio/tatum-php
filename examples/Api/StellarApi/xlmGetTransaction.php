<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/StellarApi.md#xlmgettransaction
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
$arg_hash = "749e4f8933221b9942ef38a02856803f379789ec8d971f1f60535db70135673e";

try {

    /**
     * GET /v3/xlm/transaction/{hash}
     * 
     * @var \Tatum\Model\XlmTx $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->stellar()
        ->xlmGetTransaction($arg_hash);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->stellar()->xlmGetTransaction(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->stellar()->xlmGetTransaction(): %s\n", 
        $exc->getMessage()
    );
}