<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainOperationsApi.md#transferxrpkms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transfer_xrp_kms = (new \Tatum\Model\TransferXrpKMS())
    ->setSenderAccountId('61b3bffddfb389cde19c73be')
    ->setAccount('rPRxSZzTFd6Yez3UMxFUPJvnhUhjewpjfV')
    ->setAddress('rPRxSZzTFd6Yez3UMxFUPJvnhUhjewpjfV')
    ->setAmount('10000')
    ->setCompliant(false)/* optional */
    ->setAttr('12355')/* optional */
    ->setSourceTag(12355)/* optional */
    ->setPaymentId('1234')/* optional */
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    ->setSenderNote('Sender note')/* optional */;

try {
    /** @var \Tatum\Model\TransferBtcMnemonic200Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainOperations()
        ->transferXrpKMS($arg_transfer_xrp_kms);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainOperations()->transferXrpKMS(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainOperations()->transferXrpKMS(): " . $exc->getMessage() . PHP_EOL;
}