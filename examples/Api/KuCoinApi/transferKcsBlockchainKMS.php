<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/KuCoinApi.md#transferkcsblockchainkms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transfer_kcs_blockchain_kms = (new \Tatum\Model\TransferKcsBlockchainKMS())
    ->setData('4d79206e6f746520746f2074686520726563697069656e74')/* optional */
    ->setNonce(null)/* optional */
    ->setTo('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    ->setCurrency('KCS')
    ->setFee(null)/* optional */
    ->setAmount('100000')
    ->setIndex(null)/* optional */
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83');

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->kuCoin()
        ->transferKcsBlockchainKMS($arg_transfer_kcs_blockchain_kms);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->kuCoin()->transferKcsBlockchainKMS(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->kuCoin()->transferKcsBlockchainKMS(): " . $exc->getMessage() . PHP_EOL;
}