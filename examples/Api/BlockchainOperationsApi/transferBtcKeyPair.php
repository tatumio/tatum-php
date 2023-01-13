<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainOperationsApi.md#transferbtckeypair
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transfer_btc_key_pair = (new \Tatum\Model\TransferBtcKeyPair())
    ->setSenderAccountId('5e68c66581f2ee32bc354087')
    ->setAddress('mpTwPdF8up9kidgcAStriUPwRdnE9MRAg7')
    ->setAmount('0.001')
    ->setCompliant(false)/* optional */
    ->setFee('0.0005')/* optional */
    ->setMultipleAmounts(null)/* optional */
    ->setKeyPair(null)
    ->setAttr('null')
    ->setPaymentId('1234')/* optional */
    ->setSenderNote('Sender note')/* optional */;

try {
    /** @var \Tatum\Model\TransferBtcMnemonic200Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainOperations()
        ->transferBtcKeyPair($arg_transfer_btc_key_pair);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainOperations()->transferBtcKeyPair(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainOperations()->transferBtcKeyPair(): " . $exc->getMessage() . PHP_EOL;
}