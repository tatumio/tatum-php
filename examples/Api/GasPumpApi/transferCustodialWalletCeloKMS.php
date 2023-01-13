<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/GasPumpApi.md#transfercustodialwalletcelokms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transfer_custodial_wallet_celo_kms = (new \Tatum\Model\TransferCustodialWalletCeloKMS())
    ->setChain('CELO')
    ->setCustodialAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    ->setRecipient('0xe242bA5456b782919AFc85687422eEA2cB73B5d3')
    ->setContractType(0)
    ->setTokenAddress('0x782919AFc85eEA2cB736874225456bB5d3e242bA')/* optional */
    ->setAmount('100000')/* optional */
    ->setTokenId('100000')/* optional */
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    ->setIndex(null)/* optional */
    ->setFeeCurrency('null')
    ->setNonce(1)/* optional */
    ->setFee(null)/* optional */;

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->gasPump()
        ->transferCustodialWalletCeloKMS($arg_transfer_custodial_wallet_celo_kms);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->gasPump()->transferCustodialWalletCeloKMS(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->gasPump()->transferCustodialWalletCeloKMS(): " . $exc->getMessage() . PHP_EOL;
}