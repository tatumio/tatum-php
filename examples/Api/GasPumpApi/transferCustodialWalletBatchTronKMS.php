<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/GasPumpApi.md#transfercustodialwalletbatchtronkms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transfer_custodial_wallet_batch_tron_kms = (new \Tatum\Model\TransferCustodialWalletBatchTronKMS())
    
    // The blockchain to work with
    ->setChain('TRON')
    
    // The gas pump address that transfers the assets; this is the address that you <a href="#operation/PrecalculateGasPumpAddresses">precalculated</a> and <a href="#operation/ActivateGasPumpAddresses">activated</a> earlier and that is assigned to a customer in your custodial application; this is not the "master address"
    ->setCustodialAddress('TYMwiDu22V6XG3yk6W9cTVBz48okKLRczh')
    
    // The blockchain address that owns the gas pump address ("master address") in the Base58 format
    ->setFrom('TBAYy8ykFZqdzxMwaqacHvUvUzUTp6ZR5U')
    
    // The blockchain address that receives the assets
    ->setRecipient(null)
    
    // The type of the assets to transfer. Set <code>0</code> for fungible tokens (ERC-20 or equivalent), <code>1</code> for NFTs (ERC-721 or equivalent), or <code>3</code> for native blockchain currencies.
    ->setContractType(null)
    
    // <ul> <li> If the assets are fungible tokens or NFTs, set this parameter to the array of the addresses of the tokens to transfer:<br/> <code>"tokenAddress": ["0x782919AFc85eEA2cB736874225456bB5d3e242bA","0x74225456bB5d3e242bA782919AFc85eEA2cB7368",...,"0x3e242bA78274225456bB52cB7368d919AFc85eEA"]</code> </li> <li> If the assets are a native blockchain currency, set this parameter to the array of zeros, a zero per currency:<br/> <code>"tokenAddress": ["0","0",...,"0"]</code> </li> </ul>
    ->setTokenAddress(null)
    
    // <ul> <li> If the assets are fungible tokens or a native blockchain currency, set this parameter to the array of the amounts of the assets to transfer:<br/> <code>"amount": ["100000","15000",...,"250000"]</code> </li> <li> If the assets are NFTs, set this parameter to the array of zeros, a zero per NFT:<br/> <code>"amount": ["0","0",...,"0"]</code> </li> </ul>
    ->setAmount(null)
    
    // <ul> <li> If the assets are NFTs, set this parameter to the array of the IDs of the tokens to transfer:<br/> <code>"tokenId": ["12","13",...,"24"]</code>  </li> <li> If the assets are fungible tokens or a native blockchain currency, set this parameter to the array of zeros, a zero per fungible token/currency:<br/> <code>"tokenId": ["0","0",...,"0"]</code> </li> </ul>
    ->setTokenId(null)
    
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
        ->transferCustodialWalletBatchTronKMS($arg_transfer_custodial_wallet_batch_tron_kms);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->gasPump()->transferCustodialWalletBatchTronKMS(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->gasPump()->transferCustodialWalletBatchTronKMS(): " . $exc->getMessage() . PHP_EOL;
}