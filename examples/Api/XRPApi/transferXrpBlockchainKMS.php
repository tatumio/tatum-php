<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/XRPApi.md#transferxrpblockchainkms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transfer_xrp_blockchain_kms = (new \Tatum\Model\TransferXrpBlockchainKMS())
    
    // XRP account address. Must be the one used for generating deposit tags.
    ->setFromAccount('rPRxSZzTFd6Yez3UMxFUPJvnhUhjewpjfV')
    
    // Blockchain address to send assets
    ->setTo('rPRxSZzTFd6Yez3UMxFUPJvnhUhjewpjfV')
    
    // Amount to be sent, in XRP.
    ->setAmount('10000')
    
    // Identifier of the secret associated in signing application. Secret, or signature Id must be present.
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    
    // (optional) Fee to be paid, in XRP. If omitted, current fee will be calculated.
    ->setFee('10000')
    
    // (optional) Source tag of sender account, if any.
    ->setSourceTag(12355)
    
    // (optional) Destination tag of recipient account, if any.
    ->setDestinationTag(12355);

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->xRP()
        ->transferXrpBlockchainKMS($arg_transfer_xrp_blockchain_kms);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->xRP()->transferXrpBlockchainKMS(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->xRP()->transferXrpBlockchainKMS(): " . $exc->getMessage() . PHP_EOL;
}