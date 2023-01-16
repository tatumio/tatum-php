<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/MarketplaceApi.md#generatemarketplacesolanakms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_generate_marketplace_solana_kms = (new \Tatum\Model\GenerateMarketplaceSolanaKMS())
    
    // Blockchain to work with.
    ->setChain('SOL')
    
    // The percentage of the amount that an NFT was sold for that will be sent to the marketplace as a fee. To set the fee to 1%, set this parameter to <code>100</code>; to set 10%, set this parameter to <code>1000</code>; to set 50%, set this parameter to <code>5000</code>, and so on.
    ->setMarketplaceFee(150)
    
    // The address that will be the owner of the marketplace
    ->setFrom('FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU')
    
    // (optional) Address of a SPL token contract
    ->setTreasuryMint('FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU')
    
    // (optional) The address that will be able to withdraw funds from the marketplace treasury account to own address
    ->setTreasuryWithdrawalDestination('FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU')
    
    // (optional) The address that will be able to withdraw funds from the marketplace fee account to own address
    ->setFeeWithdrawalDestination('FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU')
    
    // (optional) Set to "false" if you do not want the marketplace to sign all operations related to the listings and sales; if not set, defaults to "true" (the marketplace must sign all the operations)
    ->setRequiresSignOff(true)
    
    // (optional) Set to "true" to allow the marketplace to change the sale price that the seller intentionally set to 0; if not set, defaults to "false" (the marketplace cannot change the sale price)
    ->setCanChangeSalePrice(true)
    
    // The KMS identifier of the private key of the blockchain address from which the fee will be deducted
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83');

try {
    /** @var \Tatum\Model\GenerateMarketplace200Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->marketplace()
        ->generateMarketplaceSolanaKMS($arg_generate_marketplace_solana_kms);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->marketplace()->generateMarketplaceSolanaKMS(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->marketplace()->generateMarketplaceSolanaKMS(): " . $exc->getMessage() . PHP_EOL;
}