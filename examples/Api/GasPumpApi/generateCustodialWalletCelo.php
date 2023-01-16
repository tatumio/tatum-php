<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/GasPumpApi.md#generatecustodialwalletcelo
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_generate_custodial_wallet_celo = (new \Tatum\Model\GenerateCustodialWalletCelo())
    
    // Blockchain to work with.
    ->setChain('CELO')
    
    // (optional) The currency in which the gas fee will be paid
    ->setFeeCurrency('null')
    
    // Private key of account, from which the transaction will be initiated.
    ->setFromPrivateKey('0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2')
    
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
        ->generateCustodialWalletCelo($arg_generate_custodial_wallet_celo);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->gasPump()->generateCustodialWalletCelo(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->gasPump()->generateCustodialWalletCelo(): %s\n", 
        $exc->getMessage()
    );
}