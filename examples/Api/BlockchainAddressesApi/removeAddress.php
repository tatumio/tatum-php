<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/BlockchainAddressesApi/#removeaddress
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

// Account ID
$arg_id = "5e68c66581f2ee32bc354087";

// Blockchain address
$arg_address = "2MsM67NLa71fHvTUBqNENW15P68nHB2vVXb";

// Destination tag or memo attribute for XRP, BNB or XLM addresses
$arg_index = 1;

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * DELETE /v3/offchain/account/{id}/address/{address}
     */
    $sdk->mainnet()
        ->api()
        ->blockchainAddresses()
        ->removeAddress($arg_id, $arg_address, $arg_index);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->blockchainAddresses()->removeAddress(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->blockchainAddresses()->removeAddress(): %s\n", 
        $exc->getMessage()
    );
}