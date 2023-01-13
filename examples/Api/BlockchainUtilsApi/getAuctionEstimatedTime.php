<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainUtilsApi.md#getauctionestimatedtime
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// The blockchain to work with
$arg_chain = 'chain_example';

// The date and time in the ISO 8601 standard format
$arg_date = "2021-09-17T07:55:54Z";

try {
    /** @var float $response */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainUtils()
        ->getAuctionEstimatedTime($arg_chain, $arg_date);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainUtils()->getAuctionEstimatedTime(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainUtils()->getAuctionEstimatedTime(): " . $exc->getMessage() . PHP_EOL;
}