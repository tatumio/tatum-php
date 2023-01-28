<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/BlockchainAddressesApi/#assignaddress
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

// The ID of the virtual account to assign a blockchain address to
$arg_id = "5e68c66581f2ee32bc354087";

// The blockchain address to assign to the virtual account
$arg_address = "2MsM67NLa71fHvTUBqNENW15P68nHB2vVXb";

// Destination tag or memo attribute for XRP or XLM addresses
$arg_index = 1;

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * POST /v3/offchain/account/{id}/address/{address}
     * 
     * @var \Tatum\Model\Address $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainAddresses()
        ->assignAddress($arg_id, $arg_address, $arg_index);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->blockchainAddresses()->assignAddress(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->blockchainAddresses()->assignAddress(): %s\n", 
        $exc->getMessage()
    );
}