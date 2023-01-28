<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/BlockchainOperationsApi/#deploytrcoffchainkmsxpub
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

$arg_deploy_trc_offchain_kms_xpub = (new \Tatum\Model\DeployTrcOffchainKMSXpub())
    
    // The name of the token; used as an identifier within the Tatum platform and as a currency symbol o...
    ->setSymbol('MY_TOKEN')
    
    // The supply of the token
    ->setSupply('10000000')
    
    // The number of decimal places that the token has
    ->setDecimals(6)
    
    // The type of the token
    ->setType('TRC10')
    
    // The description of the token; used as a description within the Tatum platform and as a currency n...
    ->setDescription('My Public Token')
    
    // The extended public key of the TRON wallet from which a deposit address for the virtual account w...
    ->setXpub('0244b3f40c6e570ae0032f6d7be87737a6c4e5314a4a1a82e22d0460a0d0cd794936c61f0c80dc74ace4cd04690d4eeb1aa6555883be006e1748306faa7ed3a26a')
    
    // The derivation index to use together with the extended public key to generate the deposit address
    ->setDerivationIndex(0)
    
    // The blockchain address from which the fee for deploying the smart contract will be deducted
    ->setFrom('null')
    
    // The KMS identifier of either the <b>private key</b> of the blockchain address from which the fee ...
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    
    // (optional) (Only if the signature ID is mnemonic-based) The index of the address from which the fee will be ...
    ->setIndex(null)
    
    // The base pair for the virtual currency that represents the token; used to calculate the value of ...
    ->setBasePair('EUR')
    
    // (optional) The exchange rate for the base pair; one unit of the created virtual currency equals 1 unit of <c...
    ->setBaseRate(1)
    
    // (optional) (TRC-10 tokens only) The URL of the project that the token is created for<br/>Use this parameter ...
    ->setUrl('https://mytoken.com')
    
    // (optional) \Tatum\Model\CustomerRegistration
    ->setCustomer(null);

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * POST /v3/offchain/tron/trc/deploy
     * 
     * @var \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response $response
     */
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