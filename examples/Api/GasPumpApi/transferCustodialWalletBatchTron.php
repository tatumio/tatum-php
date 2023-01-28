<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/GasPumpApi/#transfercustodialwalletbatchtron
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

$arg_transfer_custodial_wallet_batch_tron = (new \Tatum\Model\TransferCustodialWalletBatchTron())
    
    // The blockchain to work with
    ->setChain('TRON')
    
    // The gas pump address that transfers the assets; this is the address that you precalculated and ac...
    ->setCustodialAddress('TYMwiDu22V6XG3yk6W9cTVBz48okKLRczh')
    
    // The blockchain address that receives the assets
    ->setRecipient(null)
    
    // The type of the assets to transfer. Set <code>0</code> for fungible tokens (ERC-20 or equivalent)...
    ->setContractType(null)
    
    // <ul> <li> If the assets are fungible tokens or NFTs, set this parameter to the array of the addre...
    ->setTokenAddress(null)
    
    // <ul> <li> If the assets are fungible tokens or a native blockchain currency, set this parameter t...
    ->setAmount(null)
    
    // <ul> <li> If the assets are NFTs, set this parameter to the array of the IDs of the tokens to tra...
    ->setTokenId(null)
    
    // The private key of the blockchain address that owns the gas pump address ("master address")
    ->setFromPrivateKey('05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2648ce5080c2')
    
    // The maximum amount to be paid as the gas fee (in TRX)
    ->setFeeLimit(10);

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
        ->transferCustodialWalletBatchTron($arg_transfer_custodial_wallet_batch_tron);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->gasPump()->transferCustodialWalletBatchTron(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->gasPump()->transferCustodialWalletBatchTron(): %s\n", 
        $exc->getMessage()
    );
}