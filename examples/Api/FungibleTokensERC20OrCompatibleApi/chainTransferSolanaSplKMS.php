<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/FungibleTokensERC20OrCompatibleApi.md#chaintransfersolanasplkms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_chain_transfer_solana_spl_kms = (new \Tatum\Model\ChainTransferSolanaSplKMS())
    ->setChain('SOL')
    ->setFrom('BL4Xgn1jkuU4Yr3SQ4HG8cD5SBrsSk7BihKzkb5zTUfs')
    ->setTo('FykfMwA9WNShzPJbbb9DNXsfgDgS3XZzWiFgrVXfWoPJ')
    ->setContractAddress('FykfMwA9WNShzPJbbb9DNXsfgDgS3XZzWiFgrVXfWoPJ')
    ->setAmount('100000')
    ->setDigits(18)
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    ->setFeePayer('FykfMwA9WNShzPJbbb9DNXsfgDgS3XZzWiFgrVXfWoPJ')/* optional */
    ->setFeePayerSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')/* optional */;

// Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
$arg_x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->fungibleTokensERC20OrCompatible()
        ->chainTransferSolanaSplKMS($arg_chain_transfer_solana_spl_kms, $arg_x_testnet_type);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->fungibleTokensERC20OrCompatible()->chainTransferSolanaSplKMS(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->fungibleTokensERC20OrCompatible()->chainTransferSolanaSplKMS(): " . $exc->getMessage() . PHP_EOL;
}