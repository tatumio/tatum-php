<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainOperationsApi.md#deploykcserc20offchainmnemonicaddress
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_deploy_kcs_erc20_offchain_mnemonic_address = (new \Tatum\Model\DeployKCSErc20OffchainMnemonicAddress())
    
    // Name of the ERC20 token - stored as a symbol on Blockchain
    ->setSymbol('MT')
    
    // max supply of ERC20 token.
    ->setSupply('10000000')
    
    // Description of the ERC20 token
    ->setDescription('My ERC20 Token')
    
    // Base pair for ERC20 token. 1 token will be equal to 1 unit of base pair. Transaction value will b...
    ->setBasePair('EUR')
    
    // (optional) Exchange rate of the base pair. Each unit of the created curency will represent value of baseRate...
    ->setBaseRate(1)
    
    // (optional) 
    ->setCustomer(null)
    
    // Address on Ethereum blockchain, where all initial supply will be stored. Either xpub and derivati...
    ->setAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // Mnemonic to generate private key for the deploy account of ERC20, from which the gas will be paid...
    ->setMnemonic('urge pulp usage sister evidence arrest palm math please chief egg abuse')
    
    // derivation index of address to pay for deployment of ERC20
    ->setIndex(0)
    
    // (optional) The nonce to be set to the transaction; if not present, the last known nonce will be used
    ->setNonce(null);

try {

    /** @var \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainOperations()
        ->deployKCSErc20OffchainMnemonicAddress($arg_deploy_kcs_erc20_offchain_mnemonic_address);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->blockchainOperations()->deployKCSErc20OffchainMnemonicAddress(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->blockchainOperations()->deployKCSErc20OffchainMnemonicAddress(): %s\n", 
        $exc->getMessage()
    );
}