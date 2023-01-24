<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/FlowApi.md#flowgetrawtransaction
 * @license MIT
 * @author  Mark Jivko
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
$arg_hash = "d60631d8e5c8b6eb0557b5181cf28564d771c628a08abc414e87ad7c05ff2fc2";

try {

    /**
     * GET /v3/flow/transaction/{hash}
     * 
     * @var \Tatum\Model\FlowTx $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->flow()
        ->flowGetRawTransaction($arg_hash);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->flow()->flowGetRawTransaction(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->flow()->flowGetRawTransaction(): %s\n", 
        $exc->getMessage()
    );
}