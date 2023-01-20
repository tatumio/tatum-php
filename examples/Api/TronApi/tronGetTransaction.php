<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/TronApi.md#trongettransaction
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// Transaction hash.
$arg_hash = "81d0524acf5967f3b361e03fd7d141ab511791cd7aad7ae406c4c8d408290991";

try {

    /**
     * GET /v3/tron/transaction/{hash}
     * 
     * @var \Tatum\Model\TronTx $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->tron()
        ->tronGetTransaction($arg_hash);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->tron()->tronGetTransaction(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->tron()->tronGetTransaction(): %s\n", 
        $exc->getMessage()
    );
}