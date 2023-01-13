<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainOperationsApi.md#offxdctransfereth
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transfer_eth = (new \Tatum\Model\TransferEth())
    ->setNonce(null)/* optional */
    ->setAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    ->setAmount('100000')
    ->setCompliant(false)/* optional */
    ->setPrivateKey('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
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
        ->offXdcTransferEth($arg_transfer_eth);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainOperations()->offXdcTransferEth(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainOperations()->offXdcTransferEth(): " . $exc->getMessage() . PHP_EOL;
}