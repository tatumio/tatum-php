<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/GasPumpApi/#transfercustodialwalletbatchtronkms
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

$arg_transfer_custodial_wallet_batch_tron_kms = (new \Tatum\Model\TransferCustodialWalletBatchTronKMS())
    
    // The blockchain to work with
    ->setChain('TRON')
    
    // The gas pump address that transfers the assets; this is the address that you precalculated and ac...
    ->setCustodialAddress('TYMwiDu22V6XG3yk6W9cTVBz48okKLRczh')
    
    // The blockchain address that owns the gas pump address ("master address") in the Base58 format
    ->setFrom('TBAYy8ykFZqdzxMwaqacHvUvUzUTp6ZR5U')
    
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
    
    // The KMS identifier of the private key of the blockchain address that owns the gas pump address ke...
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    
    // (optional) (Only if the signature ID is mnemonic-based) The index of the "master address"
    ->setIndex(null)
    
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
        ->transferCustodialWalletBatchTronKMS($arg_transfer_custodial_wallet_batch_tron_kms);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->gasPump()->transferCustodialWalletBatchTronKMS(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->gasPump()->transferCustodialWalletBatchTronKMS(): %s\n", 
        $exc->getMessage()
    );
}