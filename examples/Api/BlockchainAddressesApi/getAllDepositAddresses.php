<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/BlockchainAddressesApi/#getalldepositaddresses
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

// The ID of the virtual account to get deposit addresses for
$arg_id = "5e68c66581f2ee32bc354087";

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * GET /v3/offchain/account/{id}/address
     * 
     * @var \Tatum\Model\Address[] $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainAddresses()
        ->getAllDepositAddresses($arg_id);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->blockchainAddresses()->getAllDepositAddresses(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->blockchainAddresses()->getAllDepositAddresses(): %s\n", 
        $exc->getMessage()
    );
}