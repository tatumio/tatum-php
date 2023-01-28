<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/AuctionApi/#approvenftspendingcelokms
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

$arg_approve_nft_spending_celo_kms = (new \Tatum\Model\ApproveNftSpendingCeloKMS())
    
    // The blockchain to work with
    ->setChain('CELO')
    
    // The blockchain address of the auction/marketplace smart contract
    ->setSpender('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // Set to "true" if the asset is an NFT; set to "false" is the asset is a Multi Token
    ->setIsErc721(true)
    
    // The ID of the asset (NFT or Multi Token)
    ->setTokenId('100000')
    
    // The blockchain address of the smart contract from which the asset (NFT or Multi Token) was minted
    ->setContractAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // The KMS identifier of the private key of the blockchain address from which the fee will be deducted
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    
    // (optional) (Only if the signature ID is mnemonic-based) The index of the address from which the fee will be ...
    ->setIndex(null)
    
    // The currency in which the transaction fee will be paid - CELO - CUSD - CEUR
    ->setFeeCurrency('null')
    
    // (optional) The nonce to be set to the transaction; if not present, the last known nonce will be used
    ->setNonce(1)
    
    // (optional) \Tatum\Model\CustomFee
    ->setFee(null);

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * POST /v3/blockchain/auction/approve
     * 
     * @var \Tatum\Model\TransactionSigned $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->auction()
        ->approveNftSpendingCeloKMS($arg_approve_nft_spending_celo_kms);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->auction()->approveNftSpendingCeloKMS(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->auction()->approveNftSpendingCeloKMS(): %s\n", 
        $exc->getMessage()
    );
}