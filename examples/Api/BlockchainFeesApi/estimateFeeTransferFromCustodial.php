<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/BlockchainFeesApi/#estimatefeetransferfromcustodial
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

$arg_estimate_fee_transfer_from_custodial = (new \Tatum\Model\EstimateFeeTransferFromCustodial())
    
    // The blockchain to estimate the fee for
    ->setChain('null')
    
    // The type of the transaction
    ->setType('null')
    
    // The blockchain address of the sender
    ->setSender('0xfb99f8ae9b70a0c8cd96ae665bbaf85a7e01a2ef')
    
    // The blockchain address of the recipient
    ->setRecipient('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // The blockchain address of the custodial wallet contract
    ->setCustodialAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // The type of the asset to transfer. Set <code>0</code> for fungible tokens (ERC-20 or equivalent),...
    ->setTokenType(0)
    
    // <ul><li>If the asset to transfer is a fungible token, Multi Token, or a native blockchain currenc...
    ->setAmount('100000')
    
    // (optional) (Only if the asset to transfer is a fungible token) The address of the smart contract of the token
    ->setContractAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85');

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * POST /v3/blockchain/estimate
     * 
     * @var \Tatum\Model\EstimateFee200Response $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainFees()
        ->estimateFeeTransferFromCustodial($arg_estimate_fee_transfer_from_custodial);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->blockchainFees()->estimateFeeTransferFromCustodial(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->blockchainFees()->estimateFeeTransferFromCustodial(): %s\n", 
        $exc->getMessage()
    );
}