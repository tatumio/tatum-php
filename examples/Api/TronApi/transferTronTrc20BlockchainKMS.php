<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/TronApi/#transfertrontrc20blockchainkms
 * @license MIT
 * @author  Mark Jivko
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

$arg_transfer_tron_trc20_blockchain_kms = (new \Tatum\Model\TransferTronTrc20BlockchainKMS())
    
    // Sender address of TRON account in Base58 format.
    ->setFrom('TYMwiDu22V6XG3yk6W9cTVBz48okKLRczh')
    
    // Identifier of the private key associated in signing application. Private key, or signature Id mus...
    ->setSignatureId('1f7f7c0c-3906-4aa1-9dfe-4b67c43918f6')
    
    // (optional) If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic.
    ->setIndex(null)
    
    // Recipient address of TRON account in Base58 format.
    ->setTo('TYMwiDu22V6XG3yk6W9cTVBz48okKLRczh')
    
    // Address of the TRC20 token to transfer.
    ->setTokenAddress('TVAEYCmc15awaDRAjUZ1kvcHwQQaoPw2CW')
    
    // Fee in TRX to be paid.
    ->setFeeLimit(0.01)
    
    // Amount to be sent in TRX.
    ->setAmount('100000');

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * POST /v3/tron/trc20/transaction
     * 
     * @var \Tatum\Model\TransactionHash $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->tron()
        ->transferTronTrc20BlockchainKMS($arg_transfer_tron_trc20_blockchain_kms);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->tron()->transferTronTrc20BlockchainKMS(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->tron()->transferTronTrc20BlockchainKMS(): %s\n", 
        $exc->getMessage()
    );
}