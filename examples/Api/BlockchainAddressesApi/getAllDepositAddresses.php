<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainAddressesApi.md#getalldepositaddresses
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// The ID of the virtual account to get deposit addresses for
$arg_id = "5e68c66581f2ee32bc354087";

try {
    /** @var \Tatum\Model\Address[] $response */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainAddresses()
        ->getAllDepositAddresses($arg_id);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainAddresses()->getAllDepositAddresses(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainAddresses()->getAllDepositAddresses(): " . $exc->getMessage() . PHP_EOL;
}