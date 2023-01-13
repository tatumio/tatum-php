<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainOperationsApi.md#transferbsckms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transfer_bsc_kms = (new \Tatum\Model\TransferBscKMS())
    ->setNonce(null)/* optional */
    ->setAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    ->setAmount('100000')
    ->setCompliant(false)/* optional */
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    ->setIndex(0)/* optional */
    ->setPaymentId('1234')/* optional */
    ->setSenderAccountId('5e68c66581f2ee32bc354087')
    ->setSenderNote('Sender note')/* optional */
    ->setGasLimit('40000')/* optional */
    ->setGasPrice('20')/* optional */;

try {
    /** @var \Tatum\Model\TransferBtcMnemonic200Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainOperations()
        ->transferBscKMS($arg_transfer_bsc_kms);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainOperations()->transferBscKMS(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainOperations()->transferBscKMS(): " . $exc->getMessage() . PHP_EOL;
}