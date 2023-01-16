<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainOperationsApi.md#transferxrp
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transfer_xrp = (new \Tatum\Model\TransferXrp())
    
    // Sender account ID
    ->setSenderAccountId('61b3bffddfb389cde19c73be')
    
    // XRP account address. Must be the one used for generating deposit tags.
    ->setAccount('rPRxSZzTFd6Yez3UMxFUPJvnhUhjewpjfV')
    
    // Blockchain address to send assets
    ->setAddress('rPRxSZzTFd6Yez3UMxFUPJvnhUhjewpjfV')
    
    // Amount to be sent, in XRP.
    ->setAmount('10000')
    
    // (optional) Compliance check, if withdrawal is not compliant, it will not be processed.
    ->setCompliant(false)
    
    // (optional) Destination tag of the recipient account, if any. Must be stringified uint32.
    ->setAttr('12355')
    
    // (optional) Source tag of sender account, if any.
    ->setSourceTag(12355)
    
    // (optional) Identifier of the payment, shown for created Transaction within Tatum sender account.
    ->setPaymentId('1234')
    
    // Secret for account. Secret, or signature Id must be present.
    ->setSecret('snSFTHdvSYQKKkYntvEt8cnmZuPJB')
    
    // (optional) Note visible to owner of withdrawing account.
    ->setSenderNote('Sender note');

try {

    /** @var \Tatum\Model\TransferBtcMnemonic200Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainOperations()
        ->transferXrp($arg_transfer_xrp);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->blockchainOperations()->transferXrp(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->blockchainOperations()->transferXrp(): %s\n", 
        $exc->getMessage()
    );
}