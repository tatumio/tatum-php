<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainOperationsApi.md#deploytrcoffchainpkaddress
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_deploy_trc_offchain_pk_address = (new \Tatum\Model\DeployTrcOffchainPKAddress())
    
    // Name of the TRC token - stored as a symbol on Blockchain
    ->setSymbol('MT')
    
    // max supply of TRC token.
    ->setSupply('10000000')
    
    // Number of decimal points of the token.
    ->setDecimals(6)
    
    // Type of TRC token to create.
    ->setType('TRC10')
    
    // Description of the TRC token
    ->setDescription('My TRC Token')
    
    // (optional) URL of the project. Applicable for TRC-10 only.
    ->setUrl('https://mytoken.com')
    
    // Base pair for TRC token. 1 token will be equal to 1 unit of base pair. Transaction value will be calculated according to this base pair.
    ->setBasePair('EUR')
    
    // (optional) Exchange rate of the base pair. Each unit of the created curency will represent value of baseRate*1 basePair.
    ->setBaseRate(1)
    
    // (optional) 
    ->setCustomer(null)
    
    // Address on Tron blockchain, where all initial supply will be stored. Either xpub and derivationIndex, or address must be present, not both.
    ->setAddress('TVAEYCmc15awaDRAjUZ1kvcHwQQaoPw2CW')
    
    // Private key of Tron account address, from which gas for deployment of TRC will be paid. Private key, mnemonic or signature Id must be present.
    ->setPrivateKey('0244b3f40c6e570ae0032f6d7be87737a6c4e5314a4a1a82e22d0460a0d0cd794936c61f0c80dc74ace4cd04690d4eeb1aa6555883be006e1748306faa7ed3a26a');

try {
    /** @var \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainOperations()
        ->deployTrcOffchainPKAddress($arg_deploy_trc_offchain_pk_address);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainOperations()->deployTrcOffchainPKAddress(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainOperations()->deployTrcOffchainPKAddress(): " . $exc->getMessage() . PHP_EOL;
}