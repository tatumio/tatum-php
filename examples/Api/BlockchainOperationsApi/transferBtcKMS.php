<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainOperationsApi.md#transferbtckms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transfer_btc_kms = (new \Tatum\Model\TransferBtcKMS())
    ->setSenderAccountId('5e68c66581f2ee32bc354087')
    ->setAddress('mpTwPdF8up9kidgcAStriUPwRdnE9MRAg7')
    ->setAmount('0.001')
    ->setCompliant(false)/* optional */
    ->setFee('0.0005')/* optional */
    ->setMultipleAmounts(null)/* optional */
    ->setAttr('null')/* optional */
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    ->setXpub('xpub6EsCk1uU6cJzqvP9CdsTiJwT2rF748YkPnhv5Qo8q44DG7nn2vbyt48YRsNSUYS44jFCW9gwvD9kLQu9AuqXpTpM1c5hgg9PsuBLdeNncid')
    ->setPaymentId('1234')/* optional */
    ->setSenderNote('Sender note')/* optional */;

try {
    /** @var \Tatum\Model\TransferBtcMnemonic200Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainOperations()
        ->transferBtcKMS($arg_transfer_btc_kms);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainOperations()->transferBtcKMS(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainOperations()->transferBtcKMS(): " . $exc->getMessage() . PHP_EOL;
}