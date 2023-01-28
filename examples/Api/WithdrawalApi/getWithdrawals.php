<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/WithdrawalApi/#getwithdrawals
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

// Max number of items per page is 50.
$arg_page_size = 10;

// Currency of the withdrawal
$arg_currency = "BTC";

// Status of the withdrawal
$arg_status = "Done";

// Offset to obtain next page of the data.
$arg_offset = 0;

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * GET /v3/offchain/withdrawal
     * 
     * @var \Tatum\Model\WithdrawalObject[] $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->withdrawal()
        ->getWithdrawals($arg_page_size, $arg_currency, $arg_status, $arg_offset);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->withdrawal()->getWithdrawals(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->withdrawal()->getWithdrawals(): %s\n", 
        $exc->getMessage()
    );
}