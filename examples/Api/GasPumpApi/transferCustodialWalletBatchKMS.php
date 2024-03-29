<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/GasPumpApi/#transfercustodialwalletbatchkms
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

// 🐛 Enable debugging on the MainNet
$sdk->mainnet()->config()->setDebug(true);

$arg_transfer_custodial_wallet_batch_kms = (new \Tatum\Model\TransferCustodialWalletBatchKMS())
    
    // The blockchain to work with
    ->setChain('ETH')
    
    // The gas pump address that transfers the assets; this is the address that you precalculated and ac...
    ->setCustodialAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // The blockchain address that receives the assets
    ->setRecipient(null)
    
    // The type of the assets to transfer. Set <code>0</code> for fungible tokens (ERC-20 or equivalent)...
    ->setContractType(null)
    
    // <ul> <li> If the assets are fungible tokens, NFTs, or Multi Tokens, set this parameter to the arr...
    ->setTokenAddress(null)
    
    // <ul> <li> If the assets are fungible tokens, Multi Tokens, or a native blockchain currency, set t...
    ->setAmount(null)
    
    // <ul> <li> If the assets are Multi Tokens or NFTs, set this parameter to the array of the IDs of t...
    ->setTokenId(null)
    
    // The KMS identifier of the private key of the blockchain address that owns the gas pump address ke...
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    
    // (optional) (Only if the signature ID is mnemonic-based) The index of the "master address"
    ->setIndex(null)
    
    // (optional) The nonce to be set to the transfer transaction; if not present, the last known nonce will be used
    ->setNonce(1)
    
    // (optional) \Tatum\Model\CustomFee
    ->setFee(null);

try {

    /**
     * POST /v3/blockchain/sc/custodial/transfer/batch
     * 
     * @var \Tatum\Model\TransactionSigned $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->gasPump()
        ->transferCustodialWalletBatchKMS($arg_transfer_custodial_wallet_batch_kms);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->gasPump()->transferCustodialWalletBatchKMS(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->gasPump()->transferCustodialWalletBatchKMS(): %s\n", 
        $exc->getMessage()
    );
}