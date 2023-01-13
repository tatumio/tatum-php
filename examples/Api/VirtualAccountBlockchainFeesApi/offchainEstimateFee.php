<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/VirtualAccountBlockchainFeesApi.md#offchainestimatefee
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_offchain_estimate_fee = new \Tatum\Model\OffchainEstimateFee();

try {

    /** @var \Tatum\Model\FeeBtc $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->virtualAccountBlockchainFees()
        ->offchainEstimateFee($arg_offchain_estimate_fee);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->virtualAccountBlockchainFees()->offchainEstimateFee(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->virtualAccountBlockchainFees()->offchainEstimateFee(): " . $exc->getMessage() . PHP_EOL;
}