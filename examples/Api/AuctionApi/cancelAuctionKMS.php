<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/AuctionApi.md#cancelauctionkms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_cancel_auction_kms = (new \Tatum\Model\CancelAuctionKMS())
    
    // The blockchain to work with
    ->setChain('ETH')
    
    // The blockchain address of the auction smart contract
    ->setContractAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // The ID of the auction
    ->setId('null')
    
    // The KMS identifier of the private key of the blockchain address from which the fee will be deducted
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    
    // (optional) (Only if the signature ID is mnemonic-based) The index of the address from which the fee will be deducted that was generated from the mnemonic
    ->setIndex(null)
    
    // (optional) The nonce to be set to the transaction; if not present, the last known nonce will be used
    ->setNonce(1)
    
    // (optional) 
    ->setFee(null)
    
    // (optional) Optional address of the ERC20 token, which will be used as a selling currency of the NFT.
    ->setErc20Address('0x687422eEA2cB73B5d3e242bA5456b782919AFc85');

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->auction()
        ->cancelAuctionKMS($arg_cancel_auction_kms);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->auction()->cancelAuctionKMS(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->auction()->cancelAuctionKMS(): " . $exc->getMessage() . PHP_EOL;
}