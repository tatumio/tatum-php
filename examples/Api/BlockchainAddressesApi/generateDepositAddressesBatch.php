<?php
/**
 * Copyright (c) 2022-2023 Tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/BlockchainAddresses#operation/generateDepositAddressesBatch
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainAddressesApi.md#generatedepositaddressesbatch
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_offchain_addresses = new \Tatum\Model\OffchainAddresses();

try {
    /** @var \Tatum\Model\Address[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainAddresses()
        ->generateDepositAddressesBatch($arg_offchain_addresses);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainAddresses()->generateDepositAddressesBatch(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainAddresses()->generateDepositAddressesBatch(): " . $exc->getMessage() . PHP_EOL;
}