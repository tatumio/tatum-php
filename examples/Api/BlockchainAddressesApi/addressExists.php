<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/BlockchainAddressesApi/#addressexists
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

// The cryptocurrency of the blockchain address to check
$arg_currency = "BNB";

// The blockchain address to check
$arg_address = "tbnb1sfj9981j2eo1ij2e09";

// Only for BNB Beacon Chain, Stellar, or XRPL<ul><li>For <b>BNB Beacon Chain</b>, specify the memo.</li><li>For <b>Stellar</b>, specify the message.</li><li>For <b>XRPL</b>, specify the DestinationTag.</li></ul>
$arg_index = 1;

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * GET /v3/offchain/account/address/{address}/{currency}
     * 
     * @var \Tatum\Model\Account $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainAddresses()
        ->addressExists($arg_currency, $arg_address, $arg_index);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->blockchainAddresses()->addressExists(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->blockchainAddresses()->addressExists(): %s\n", 
        $exc->getMessage()
    );
}