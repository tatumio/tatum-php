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
    ->setSenderAccountId('61b3bffddfb389cde19c73be')
    ->setAccount('rPRxSZzTFd6Yez3UMxFUPJvnhUhjewpjfV')
    ->setAddress('rPRxSZzTFd6Yez3UMxFUPJvnhUhjewpjfV')
    ->setAmount('10000')
    ->setCompliant(false)/* optional */
    ->setAttr('12355')/* optional */
    ->setSourceTag(12355)/* optional */
    ->setPaymentId('1234')/* optional */
    ->setSecret('snSFTHdvSYQKKkYntvEt8cnmZuPJB')
    ->setSenderNote('Sender note')/* optional */;

try {
    /** @var \Tatum\Model\TransferBtcMnemonic200Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainOperations()
        ->transferXrp($arg_transfer_xrp);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainOperations()->transferXrp(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainOperations()->transferXrp(): " . $exc->getMessage() . PHP_EOL;
}