<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/GasPumpApi.md#generatecustodialwallettron
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_generate_custodial_wallet_tron = (new \Tatum\Model\GenerateCustodialWalletTron())
    
    // Blockchain to work with.
    ->setChain('TRON')
    
    // Fee in TRX to be paid.
    ->setFeeLimit(0.01)
    
    // Private key of account, from which the transaction will be initiated.
    ->setFromPrivateKey('842E09EB40D8175979EFB0071B28163E11AED0F14BDD84090A4CEFB936EF5701')
    
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
        ->generateCustodialWalletTron($arg_generate_custodial_wallet_tron);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->gasPump()->generateCustodialWalletTron(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->gasPump()->generateCustodialWalletTron(): %s\n", 
        $exc->getMessage()
    );
}