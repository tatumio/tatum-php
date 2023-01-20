<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/DogecoinApi.md#dogegetutxo
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// The transaction hash
$arg_hash = "5f83d51c8d3054012cea3011fa626b85d89442788721afd60719ab1f9ab8f78a";

// The index of the transaction output that you want to check for the UTXO
$arg_index = 0;

try {

    /**
     * GET /v3/dogecoin/utxo/{hash}/{index}
     * 
     * @var \Tatum\Model\DogeUTXO $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->dogecoin()
        ->dogeGetUTXO($arg_hash, $arg_index);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->dogecoin()->dogeGetUTXO(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->dogecoin()->dogeGetUTXO(): %s\n", 
        $exc->getMessage()
    );
}