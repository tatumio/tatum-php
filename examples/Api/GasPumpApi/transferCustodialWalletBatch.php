<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/GasPumpApi/#transfercustodialwalletbatch
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

$arg_transfer_custodial_wallet_batch = (new \Tatum\Model\TransferCustodialWalletBatch())
    
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
    
    // The private key of the blockchain address that owns the gas pump address ("master address")
    ->setFromPrivateKey('0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2')
    
    // (optional) The nonce to be set to the transfer transaction; if not present, the last known nonce will be used
    ->setNonce(1)
    
    // (optional) \Tatum\Model\CustomFee
    ->setFee(null);

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * POST /v3/blockchain/sc/custodial/transfer/batch
     * 
     * @var \Tatum\Model\TransactionSigned $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->gasPump()
        ->transferCustodialWalletBatch($arg_transfer_custodial_wallet_batch);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->gasPump()->transferCustodialWalletBatch(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->gasPump()->transferCustodialWalletBatch(): %s\n", 
        $exc->getMessage()
    );
}