<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BNBBeaconChainApi.md#bnbgettxbyaccount
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk(); /* <<< Set your API keys here */

// Account address
$arg_address = "tbnb185tqzq3j6y7yep85lncaz9qeectjxqe5054cgn";

// Start time in milliseconds
$arg_start_time = 1651831727871;

// End time in milliseconds
$arg_end_time = 1651831727871;

// Items per page.
$arg_limit = 10;

// Pagination offset
$arg_offset = 10;

// Asset name
$arg_asset = "BNB";

// Address type
$arg_address_type = "FROM";

try {

    /** @var \Tatum\Model\BnbTxInAccount $response */
    $response = $sdk->mainnet()
        ->api()
        ->bNBBeaconChain()
        ->bnbGetTxByAccount($arg_address, $arg_start_time, $arg_end_time, $arg_limit, $arg_offset, $arg_asset, $arg_address_type);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->bNBBeaconChain()->bnbGetTxByAccount(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->bNBBeaconChain()->bnbGetTxByAccount(): %s\n", 
        $exc->getMessage()
    );
}