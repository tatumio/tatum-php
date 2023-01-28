<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/BlockchainUtilsApi/#getauctionestimatedtime
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

// The blockchain to work with
$arg_chain = 'chain_example';

// The date and time in the ISO 8601 standard format
$arg_date = "2021-09-17T07:55:54Z";

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * GET /v3/blockchain/auction/time/{chain}/{date}
     * 
     * @var float $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainUtils()
        ->getAuctionEstimatedTime($arg_chain, $arg_date);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->blockchainUtils()->getAuctionEstimatedTime(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->blockchainUtils()->getAuctionEstimatedTime(): %s\n", 
        $exc->getMessage()
    );
}