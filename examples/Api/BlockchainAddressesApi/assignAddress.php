<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainAddressesApi.md#assignaddress
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// The ID of the virtual account to assign a blockchain address to
$arg_id = '5e68c66581f2ee32bc354087';

// The blockchain address to assign to the virtual account
$arg_address = '2MsM67NLa71fHvTUBqNENW15P68nHB2vVXb';

// Destination tag or memo attribute for XRP or XLM addresses
$arg_index = 1;

try {

    /** @var \Tatum\Model\Address $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainAddresses()
        ->assignAddress($arg_id, $arg_address, $arg_index);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainAddresses()->assignAddress(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainAddresses()->assignAddress(): " . $exc->getMessage() . PHP_EOL;
}