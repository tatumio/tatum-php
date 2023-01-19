<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainFeesApi.md#estimatefeetransferfromcustodial
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk(); /* <<< Set your API keys here */

$arg_estimate_fee_transfer_from_custodial = (new \Tatum\Model\EstimateFeeTransferFromCustodial())
    
    // Blockchain to estimate fee for.
    ->setChain('null')
    
    // Type of transaction
    ->setType('null')
    
    // Sender address
    ->setSender('0xfb99f8ae9b70a0c8cd96ae665bbaf85a7e01a2ef')
    
    // Blockchain address to send assets
    ->setRecipient('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // Contract address of the token
    ->setContractAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // Contract address of custodial wallet contract
    ->setCustodialAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // Amount to be sent in native asset, ERC20 or ERC1155
    ->setAmount('100000')
    
    // Type of the token to transfer from gas pump wallet. 0 - ERC20, 1 - ERC721, 2 - ERC1155, 3 - nativ...
    ->setTokenType(0);

try {

    /** @var \Tatum\Model\EstimateFee200Response $response */
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