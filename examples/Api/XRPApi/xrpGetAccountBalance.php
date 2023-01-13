<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/XRPApi.md#xrpgetaccountbalance
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Account address you want to get balance of
$arg_account = 'rDA3DJBUBjA1X3PtLLFAEXxX31oA5nL3QF';

try {

    /** @var \Tatum\Model\XrpAccountBalance $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->xRP()
        ->xrpGetAccountBalance($arg_account);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->xRP()->xrpGetAccountBalance(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->xRP()->xrpGetAccountBalance(): " . $exc->getMessage() . PHP_EOL;
}