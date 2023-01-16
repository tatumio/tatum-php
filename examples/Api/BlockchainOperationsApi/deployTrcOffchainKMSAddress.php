<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainOperationsApi.md#deploytrcoffchainkmsaddress
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_deploy_trc_offchain_kms_address = (new \Tatum\Model\DeployTrcOffchainKMSAddress())
    
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
    
    // Blockchain address to perform operation from
    ->setFrom('TVAEYCmc15awaDRAjUZ1kvcHwQQaoPw2CW')
    
    // Identifier of the mnemonic / private key associated in signing application. When hash identifies mnemonic, index must be present to represent specific account to pay from. Private key, mnemonic or signature Id must be present.
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83');

try {
    /** @var \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainOperations()
        ->deployTrcOffchainKMSAddress($arg_deploy_trc_offchain_kms_address);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainOperations()->deployTrcOffchainKMSAddress(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainOperations()->deployTrcOffchainKMSAddress(): " . $exc->getMessage() . PHP_EOL;
}