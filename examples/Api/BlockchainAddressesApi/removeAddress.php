<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/BlockchainAddresses#operation/removeAddress
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainAddressesApi.md#removeaddress
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Account ID
$arg_id = '5e68c66581f2ee32bc354087';

// Blockchain address
$arg_address = '2MsM67NLa71fHvTUBqNENW15P68nHB2vVXb';

// Destination tag or memo attribute for XRP, BNB or XLM addresses
$arg_index = 1;

try {
        $sdk
        ->mainnet()
        ->api()
        ->blockchainAddresses()
        ->removeAddress($arg_id, $arg_address, $arg_index);} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainAddresses()->removeAddress(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainAddresses()->removeAddress(): " . $exc->getMessage() . PHP_EOL;
}