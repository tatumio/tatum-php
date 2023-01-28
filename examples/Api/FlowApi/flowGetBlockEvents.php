<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/FlowApi/#flowgetblockevents
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

// Event type to search for
$arg_type = "A.7e60df042a9c0868.FlowToken.TokensWithdrawn";

// Block height to start searching
$arg_from = 654321;

// Block height to end searching
$arg_to = 654326;

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * GET /v3/flow/block/events
     * 
     * @var \Tatum\Model\FlowEvent[] $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->flow()
        ->flowGetBlockEvents($arg_type, $arg_from, $arg_to);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->flow()->flowGetBlockEvents(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->flow()->flowGetBlockEvents(): %s\n", 
        $exc->getMessage()
    );
}