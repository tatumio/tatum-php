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
    
    // The blockchain to work with
    ->setChain('TRON')
    
    // The gas pump address that transfers the asset; this is the address that you <a href="#operation/PrecalculateGasPumpAddresses">precalculated</a> and <a href="#operation/ActivateGasPumpAddresses">activated</a> earlier and that is assigned to a customer in your custodial application; this is not the "master address"
    ->setCustodialAddress('TYMwiDu22V6XG3yk6W9cTVBz48okKLRczh')
    
    // The blockchain address that owns the gas pump address ("master address") in the Base58 format
    ->setFrom('TBAYy8ykFZqdzxMwaqacHvUvUzUTp6ZR5U')
    
    // The blockchain address that receives the asset
    ->setRecipient('TYMcTVBz48okKLRczhwiDu22V6XG3yk6W9')
    
    // The type of the asset to transfer. Set <code>0</code> for fungible tokens (ERC-20 or equivalent), <code>1</code> for NFTs (ERC-721 or equivalent), or <code>3</code> for native blockchain currencies.
    ->setContractType(0)
    
    // (optional) (Only if the asset is a fungible token or NFT) The address of the token to transfer. Do not use if the asset is a native blockchain currency.
    ->setTokenAddress('TYMG3ykLRczh6W9cTVBz48wiDu22V6XokK')
    
    // (optional) (Only if the asset is a fungible token or native blockchain currency) The amount of the asset to transfer. Do not use if the asset is an NFT.
    ->setAmount('100000')
    
    // (optional) (Only if the asset is an NFT) The ID of the token to transfer. Do not use if the asset is a fungible token or native blockchain currency.
    ->setTokenId('100000')
    
    // The KMS identifier of the private key of the blockchain address that owns the gas pump address key ("master address")
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    
    // (optional) (Only if the signature ID is mnemonic-based) The index of the "master address" that was generated from the mnemonic
    ->setIndex(null)
    
    // The maximum amount to be paid as the gas fee (in TRX)
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