<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/MarketplaceApi.md#updatefeerecipientsolanakms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_update_fee_recipient_solana_kms = (new \Tatum\Model\UpdateFeeRecipientSolanaKMS())
    
    // Blockchain to work with.
    ->setChain('SOL')
    
    // Blockchain address of the smart contract
    ->setContractAddress('FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU')
    
    // The blockchain address of the new marketplace fee recipient
    ->setTreasuryWithdrawalDestination('FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU')
    
    // The blockchain address of the marketplace authority
    ->setFrom('FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU')
    
    // The KMS identifier of the private key of the marketspace authority
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83');

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->marketplace()
        ->updateFeeRecipientSolanaKMS($arg_update_fee_recipient_solana_kms);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->marketplace()->updateFeeRecipientSolanaKMS(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->marketplace()->updateFeeRecipientSolanaKMS(): " . $exc->getMessage() . PHP_EOL;
}