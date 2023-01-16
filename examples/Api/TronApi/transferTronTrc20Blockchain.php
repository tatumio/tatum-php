<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/TronApi.md#transfertrontrc20blockchain
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transfer_tron_trc20_blockchain = (new \Tatum\Model\TransferTronTrc20Blockchain())
    
    // Private key of the address, from which the TRX will be sent.
    ->setFromPrivateKey('842E09EB40D8175979EFB0071B28163E11AED0F14BDD84090A4CEFB936EF5701')
    
    // Recipient address of TRON account in Base58 format.
    ->setTo('TYMwiDu22V6XG3yk6W9cTVBz48okKLRczh')
    
    // Address of the TRC20 token to transfer.
    ->setTokenAddress('TVAEYCmc15awaDRAjUZ1kvcHwQQaoPw2CW')
    
    // Fee in TRX to be paid.
    ->setFeeLimit(0.01)
    
    // Amount to be sent in TRX.
    ->setAmount('100000');

try {
    /** @var \Tatum\Model\TransactionHash $response */
    $response = $sdk->mainnet()
        ->api()
        ->tron()
        ->transferTronTrc20Blockchain($arg_transfer_tron_trc20_blockchain);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->tron()->transferTronTrc20Blockchain(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->tron()->transferTronTrc20Blockchain(): " . $exc->getMessage() . PHP_EOL;
}