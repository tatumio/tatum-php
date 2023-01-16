<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/AlgorandApi.md#algorandgetpaytransactionsbyfromto
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Start timestamp in specified period of time
$arg_from = "2021-05-01T20:44:39Z";

// End timestamp in specified period of time
$arg_to = "2021-06-01T20:44:39Z";

// page size for pagination
$arg_limit = "5";

// Algorand Next Token for getting the next page results
$arg_next = "ywAAAAAAAAAAAAAA";

try {

    /** @var \Tatum\Model\AlgoTxsWithPagination $response */
    $response = $sdk->mainnet()
        ->api()
        ->algorand()
        ->algorandGetPayTransactionsByFromTo($arg_from, $arg_to, $arg_limit, $arg_next);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->algorand()->algorandGetPayTransactionsByFromTo(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->algorand()->algorandGetPayTransactionsByFromTo(): %s\n", 
        $exc->getMessage()
    );
}