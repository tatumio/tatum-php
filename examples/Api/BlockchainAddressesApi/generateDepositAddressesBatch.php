<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/BlockchainAddressesApi/#generatedepositaddressesbatch
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

$arg_offchain_addresses = (new \Tatum\Model\OffchainAddresses())
    
    // \Tatum\Model\OffchainAddressesAddressesInner[]
    ->setAddresses(null);

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * POST /v3/offchain/account/address/batch
     * 
     * @var \Tatum\Model\Address[] $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainAddresses()
        ->generateDepositAddressesBatch($arg_offchain_addresses);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->blockchainAddresses()->generateDepositAddressesBatch(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->blockchainAddresses()->generateDepositAddressesBatch(): %s\n", 
        $exc->getMessage()
    );
}