<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/AlgorandApi.md#algonodeindexergetdriver
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Tatum X-API-Key used for authorization.
$arg_x_api_key = "asdlkfjnqunalkwjfnq2oi303294857k";

// `**` path of indexer.
$arg_indexer_path = "v2/accounts";

try {

    /** @var \Tatum\Model\AlgoTx $response */
    $response = $sdk->mainnet()
        ->api()
        ->algorand()
        ->algoNodeIndexerGetDriver($arg_x_api_key, $arg_indexer_path);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->algorand()->algoNodeIndexerGetDriver(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->algorand()->algoNodeIndexerGetDriver(): %s\n", 
        $exc->getMessage()
    );
}