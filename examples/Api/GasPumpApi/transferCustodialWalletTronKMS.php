<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/GasPumpApi.md#transfercustodialwallettronkms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transfer_custodial_wallet_tron_kms = (new \Tatum\Model\TransferCustodialWalletTronKMS())
    ->setChain('TRON')
    ->setCustodialAddress('TYMwiDu22V6XG3yk6W9cTVBz48okKLRczh')
    ->setFrom('TBAYy8ykFZqdzxMwaqacHvUvUzUTp6ZR5U')
    ->setRecipient('TYMcTVBz48okKLRczhwiDu22V6XG3yk6W9')
    ->setContractType(0)
    ->setTokenAddress('TYMG3ykLRczh6W9cTVBz48wiDu22V6XokK')/* optional */
    ->setAmount('100000')/* optional */
    ->setTokenId('100000')/* optional */
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    ->setIndex(null)/* optional */
    ->setFeeLimit(10);

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->gasPump()
        ->transferCustodialWalletTronKMS($arg_transfer_custodial_wallet_tron_kms);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->gasPump()->transferCustodialWalletTronKMS(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->gasPump()->transferCustodialWalletTronKMS(): " . $exc->getMessage() . PHP_EOL;
}