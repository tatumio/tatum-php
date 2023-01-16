<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/FungibleTokensERC20OrCompatibleApi.md#approveceloerc20
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_approve_celo_erc20 = (new \Tatum\Model\ApproveCeloErc20())
    
    // The blockchain to work with
    ->setChain('CELO')
    
    // The address of the smart contract
    ->setContractAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // The blockchain address to be allowed to transfer or burn the fungible tokens
    ->setSpender('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // The amount of the tokens allowed to be transferred or burnt
    ->setAmount('100000')
    
    // The private key of the smart contract's owner; the fee will be deducted from the owner's address
    ->setFromPrivateKey('0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2')
    
    // The currency in which the transaction fee will be paid
    ->setFeeCurrency('null')
    
    // (optional) 
    ->setFee(null)
    
    // (optional) The nonce to be set to the transaction; if not present, the last known nonce will be used
    ->setNonce(null);

// Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
$arg_x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->fungibleTokensERC20OrCompatible()
        ->approveCeloErc20($arg_approve_celo_erc20, $arg_x_testnet_type);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->fungibleTokensERC20OrCompatible()->approveCeloErc20(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->fungibleTokensERC20OrCompatible()->approveCeloErc20(): " . $exc->getMessage() . PHP_EOL;
}