<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainOperationsApi.md#deployalgoerc20offchainmnemonicaddress
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_deploy_algo_erc20_offchain_mnemonic_address = (new \Tatum\Model\DeployAlgoErc20OffchainMnemonicAddress())
    
    // Name of the ERC20 token - stored as a symbol on Blockchain
    ->setSymbol('MT')
    
    // max supply of ERC20 token.
    ->setSupply('10000000')
    
    // Description of the ERC20 token
    ->setDescription('My ERC20 Token')
    
    // Base pair for ERC20 token. 1 token will be equal to 1 unit of base pair. Transaction value will be calculated according to this base pair.
    ->setBasePair('EUR')
    
    // (optional) Exchange rate of the base pair. Each unit of the created curency will represent value of baseRate*1 basePair.
    ->setBaseRate(1)
    
    // (optional) 
    ->setCustomer(null)
    
    // Address on Ethereum blockchain, where all initial supply will be stored. Either xpub and derivationIndex, or address must be present, not both.
    ->setAddress('NTAESFCB3WOD7SAOL42KSPVARLB3JFA3MNX3AESWHYVT2RMYDVZI6YLG4Y')
    
    // Mnemonic to generate private key for the deploy account of ERC20, from which the gas will be paid (index will be used). If address is not present, mnemonic is used to generate xpub and index is set to 1. Either mnemonic and index or privateKey and address must be present, not both.
    ->setMnemonic('artist alarm clerk obscure timber firm reopen provide ankle vicious exhibit waste math toilet believe puppy lucky coast post kind black suspect mule able market');

try {
    /** @var \Tatum\Model\DeployAlgoErc20OffchainMnemonicAddress200Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainOperations()
        ->deployAlgoErc20OffchainMnemonicAddress($arg_deploy_algo_erc20_offchain_mnemonic_address);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainOperations()->deployAlgoErc20OffchainMnemonicAddress(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainOperations()->deployAlgoErc20OffchainMnemonicAddress(): " . $exc->getMessage() . PHP_EOL;
}