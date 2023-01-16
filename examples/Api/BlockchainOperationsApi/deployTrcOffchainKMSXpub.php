<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainOperationsApi.md#deploytrcoffchainkmsxpub
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_deploy_trc_offchain_kms_xpub = (new \Tatum\Model\DeployTrcOffchainKMSXpub())
    
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
    
    // Base pair for TRC token. 1 token will be equal to 1 unit of base pair. Transaction value will be ...
    ->setBasePair('EUR')
    
    // (optional) Exchange rate of the base pair. Each unit of the created curency will represent value of baseRate...
    ->setBaseRate(1)
    
    // (optional) 
    ->setCustomer(null)
    
    // Extended public key (xpub), from which address, where all initial supply will be stored, will be ...
    ->setXpub('0244b3f40c6e570ae0032f6d7be87737a6c4e5314a4a1a82e22d0460a0d0cd794936c61f0c80dc74ace4cd04690d4eeb1aa6555883be006e1748306faa7ed3a26a')
    
    // Derivation index for xpub to generate specific deposit address.
    ->setDerivationIndex(0)
    
    // Blockchain address to perform operation from
    ->setFrom('TVAEYCmc15awaDRAjUZ1kvcHwQQaoPw2CW')
    
    // Identifier of the mnemonic / private key associated in signing application. When hash identifies ...
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83');

try {

    /** @var \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainOperations()
        ->deployTrcOffchainKMSXpub($arg_deploy_trc_offchain_kms_xpub);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->blockchainOperations()->deployTrcOffchainKMSXpub(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->blockchainOperations()->deployTrcOffchainKMSXpub(): %s\n", 
        $exc->getMessage()
    );
}