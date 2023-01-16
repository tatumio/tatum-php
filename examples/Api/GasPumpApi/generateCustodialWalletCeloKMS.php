<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/GasPumpApi.md#generatecustodialwalletcelokms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_generate_custodial_wallet_celo_kms = (new \Tatum\Model\GenerateCustodialWalletCeloKMS())
    
    // Blockchain to work with.
    ->setChain('CELO')
    
    // The currency in which the transaction fee will be paid
    ->setFeeCurrency('null')
    
    // Identifier of the private key associated in signing application. Private key, or signature Id mus...
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    
    // (optional) If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic.
    ->setIndex(null)
    
    // If address should support ERC20 tokens, it should be marked as true.
    ->setEnableFungibleTokens(false)
    
    // If address should support ERC721 tokens, it should be marked as true.
    ->setEnableNonFungibleTokens(false)
    
    // If address should support ERC1155 tokens, it should be marked as true.
    ->setEnableSemiFungibleTokens(false)
    
    // If address should support batch transfers of the assets, it should be marked as true.
    ->setEnableBatchTransactions(false)
    
    // (optional) 
    ->setFee(null)
    
    // (optional) The nonce to be set to the transaction; if not present, the last known nonce will be used
    ->setNonce(null);

try {

    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->gasPump()
        ->generateCustodialWalletCeloKMS($arg_generate_custodial_wallet_celo_kms);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->gasPump()->generateCustodialWalletCeloKMS(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->gasPump()->generateCustodialWalletCeloKMS(): %s\n", 
        $exc->getMessage()
    );
}