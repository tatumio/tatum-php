<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/MarketplaceApi.md#withdrawfrommarketplacesolana
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_withdraw_from_marketplace_solana = (new \Tatum\Model\WithdrawFromMarketplaceSolana())
    
    // Blockchain to work with.
    ->setChain('SOL')
    
    // Blockchain address of the smart contract
    ->setContractAddress('FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU')
    
    // Blockchain address of the marketplace fee recipient
    ->setFrom(FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU)
    
    // Amount of funds to withdraw.
    ->setAmount('100000')
    
    // The private key of the marketplace fee recipient
    ->setFromPrivateKey('zgsAKfjuXrAxEyuYRxbbxPM3rdsPbJPnGreaGMbcdUApJ6wHnCqQnf9b1RNPdeZxsRMkezh4VgXQ7YrbpndGtEv');

try {

    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->marketplace()
        ->withdrawFromMarketplaceSolana($arg_withdraw_from_marketplace_solana);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->marketplace()->withdrawFromMarketplaceSolana(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->marketplace()->withdrawFromMarketplaceSolana(): %s\n", 
        $exc->getMessage()
    );
}