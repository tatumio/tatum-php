<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/DogecoinApi.md#dogerpcdriver
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

$arg_bch_rpc_driver_request = (new \Tatum\Model\BchRpcDriverRequest())
    
    // (optional) Version of the JSON RPC.
    ->setJsonrpc('1.0')
    
    // (optional) ID of the request, could be any arbitrary identifier.
    ->setId('test')
    
    // (optional) Method to invoke on the node.
    ->setMethod('getblockcount')
    
    // (optional) Params to the method call, if required.
    ->setParams([]);

try {

    /**
     * POST /v3/dogecoin/node
     * 
     * @var object $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->dogecoin()
        ->dogeRpcDriver($arg_bch_rpc_driver_request);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->dogecoin()->dogeRpcDriver(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->dogecoin()->dogeRpcDriver(): %s\n", 
        $exc->getMessage()
    );
}