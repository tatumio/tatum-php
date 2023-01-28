<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/AuctionApi/#approvenftspending
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

$arg_approve_nft_spending = (new \Tatum\Model\ApproveNftSpending())
    
    // The blockchain to work with
    ->setChain('ETH')
    
    // The blockchain address of the auction/marketplace smart contract
    ->setSpender('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // Set to "true" if the asset is an NFT; set to "false" is the asset is a Multi Token
    ->setIsErc721(true)
    
    // The ID of the asset (NFT or Multi Token)
    ->setTokenId('100000')
    
    // The blockchain address of the smart contract from which the asset (NFT or Multi Token) was minted
    ->setContractAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // The private key of the blockchain address from which the fee will be deducted
    ->setFromPrivateKey('0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2')
    
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
        ->approveNftSpending($arg_approve_nft_spending);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->auction()->approveNftSpending(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->auction()->approveNftSpending(): %s\n", 
        $exc->getMessage()
    );
}