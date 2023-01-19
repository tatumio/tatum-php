<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/AccountApi.md#getaccountsbycustomerid
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk(); /* <<< Set your API keys here */

// Max number of items per page is 50.
$arg_page_size = 10;

// Internal customer ID
$arg_id = "5e68c66581f2ee32bc354087";

// Offset to obtain the next page of data.
$arg_offset = 0;

// For bookkeeping to distinct account purpose.
$arg_account_code = "AC_1011_B";

try {

    /** @var \Tatum\Model\Account[] $response */
    $response = $sdk->mainnet()
        ->api()
        ->account()
        ->getAccountsByCustomerId($arg_page_size, $arg_id, $arg_offset, $arg_account_code);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->account()->getAccountsByCustomerId(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->account()->getAccountsByCustomerId(): %s\n", 
        $exc->getMessage()
    );
}