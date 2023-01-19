<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/GasPumpApi.md#generatecustodialwallettronkms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk(); /* <<< Set your API keys here */

$arg_generate_custodial_wallet_tron_kms = (new \Tatum\Model\GenerateCustodialWalletTronKMS())
    
    // Blockchain to work with.
    ->setChain('TRON')
    
    // Fee in TRX to be paid.
    ->setFeeLimit(0.01)
    
    // Sender address of TRON account in Base58 format.
    ->setFrom('TYMwiDu22V6XG3yk6W9cTVBz48okKLRczh')
    
    // Identifier of the private key associated in signing application. Private key, or signature Id mus...
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    
    // (optional) If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic.
    ->setIndex(null)
    
    // If address should support ERC20 tokens, it should be marked as true.
    ->setEnableFungibleTokens(false)
    
    // If address should support ERC721 tokens, it should be marked as true.
    ->setEnableNonFungibleTokens(false)
    
    // If address should support ERC1155 tokens, it should be marked as true. Not supported for TRON.
    ->setEnableSemiFungibleTokens(false)
    
    // If address should support batch transfers of the assets, it should be marked as true.
    ->setEnableBatchTransactions(false);

try {

    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->gasPump()
        ->generateCustodialWalletTronKMS($arg_generate_custodial_wallet_tron_kms);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->gasPump()->generateCustodialWalletTronKMS(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->gasPump()->generateCustodialWalletTronKMS(): %s\n", 
        $exc->getMessage()
    );
}