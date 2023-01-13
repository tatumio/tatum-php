<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/TronApi.md#transfertrontrc20blockchainkms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transfer_tron_trc20_blockchain_kms = (new \Tatum\Model\TransferTronTrc20BlockchainKMS())
    ->setFrom('TYMwiDu22V6XG3yk6W9cTVBz48okKLRczh')
    ->setSignatureId('1f7f7c0c-3906-4aa1-9dfe-4b67c43918f6')
    ->setIndex(null)/* optional */
    ->setTo('TYMwiDu22V6XG3yk6W9cTVBz48okKLRczh')
    ->setTokenAddress('TVAEYCmc15awaDRAjUZ1kvcHwQQaoPw2CW')
    ->setFeeLimit(0.01)
    ->setAmount('100000');

try {
    /** @var \Tatum\Model\TransactionHash $response */
    $response = $sdk->mainnet()
        ->api()
        ->tron()
        ->transferTronTrc20BlockchainKMS($arg_transfer_tron_trc20_blockchain_kms);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->tron()->transferTronTrc20BlockchainKMS(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->tron()->transferTronTrc20BlockchainKMS(): " . $exc->getMessage() . PHP_EOL;
}