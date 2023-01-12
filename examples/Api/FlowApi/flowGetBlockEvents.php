<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/FlowApi.md#flowgetblockevents
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Event type to search for
$arg_type = 'A.7e60df042a9c0868.FlowToken.TokensWithdrawn';

// Block height to start searching
$arg_from = 654321;

// Block height to end searching
$arg_to = 654326;

try {
    /** @var \Tatum\Model\FlowEvent[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->flow()
        ->flowGetBlockEvents($arg_type, $arg_from, $arg_to);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->flow()->flowGetBlockEvents(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->flow()->flowGetBlockEvents(): " . $exc->getMessage() . PHP_EOL;
}