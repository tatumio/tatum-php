<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/NodeRPCApi/#nodejsonrpcputdriver
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

// Blockchain to communicate with.
$arg_chain = "ALGO";

$arg_body = array('key' => new \stdClass);

// Tatum X-API-Key used for authorization. You can omit this path parameter and either use the X-Api-Key header, or the API key tied to your IP address without any header.
$arg_x_api_key = "ea8ce228-6ca3-465c-abb0-fd3c5d35c0d5";

// Type of the node to access for Algorand.
$arg_node_type = 'node_type_example';

// Optional path of rpc call for non EVM nodes, e.g. Algorand or Stellar.
$arg_rpc_path = "v2/accounts";

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * PUT /v3/blockchain/node/{chain}/{xApiKey}/{rpcPath}
     * 
     * @var object $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->nodeRPC()
        ->nodeJsonRpcPutDriver($arg_chain, $arg_body, $arg_x_api_key, $arg_node_type, $arg_rpc_path);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->nodeRPC()->nodeJsonRpcPutDriver(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->nodeRPC()->nodeJsonRpcPutDriver(): %s\n", 
        $exc->getMessage()
    );
}