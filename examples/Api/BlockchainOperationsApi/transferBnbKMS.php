<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainOperationsApi.md#transferbnbkms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transfer_bnb_kms = (new \Tatum\Model\TransferBnbKMS())
    ->setSenderAccountId('61b3bffddfb389cde19c73be')
    ->setAddress('tbnb1q82g2h9q0kfe7sysnj5w7nlak92csfjztymp39')
    ->setAmount('10000')
    ->setCompliant(false)/* optional */
    ->setAttr('12355')/* optional */
    ->setPaymentId('1234')/* optional */
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    ->setFromAddress('tbnb1q82g2h9q0kfe7sysnj5w7nlak92csfjztymp39')
    ->setSenderNote('Sender note')/* optional */;

try {
    /** @var \Tatum\Model\TransferBtcMnemonic200Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainOperations()
        ->transferBnbKMS($arg_transfer_bnb_kms);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainOperations()->transferBnbKMS(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainOperations()->transferBnbKMS(): " . $exc->getMessage() . PHP_EOL;
}