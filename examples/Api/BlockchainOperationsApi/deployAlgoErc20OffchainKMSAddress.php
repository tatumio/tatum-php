<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/BlockchainOperationsApi/#deployalgoerc20offchainkmsaddress
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

$arg_deploy_algo_erc20_offchain_kms_address = (new \Tatum\Model\DeployAlgoErc20OffchainKMSAddress())
    
    // The name of the token; used as an identifier within the Tatum platform and as a currency symbol o...
    ->setSymbol('MY_TOKEN')
    
    // The supply of the token
    ->setSupply('10000000')
    
    // The description of the token; used as a description within the Tatum platform and as a currency n...
    ->setDescription('My Public Token')
    
    // The blockchain address to be assigned to the virtual account as a deposit address
    ->setAddress('NTAESFCB3WOD7SAOL42KSPVARLB3JFA3MNX3AESWHYVT2RMYDVZI6YLG4Y')
    
    // The KMS identifier of either the <b>private key</b> of the blockchain address from which the fee ...
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    
    // (optional) (Only if the signature ID is mnemonic-based) The index of the address from which the fee will be ...
    ->setIndex(null)
    
    // The base pair for the virtual currency that represents the token; used to calculate the value of ...
    ->setBasePair('EUR')
    
    // (optional) The exchange rate for the base pair; one unit of the created virtual currency equals 1 unit of <c...
    ->setBaseRate(1)
    
    // (optional) \Tatum\Model\CustomerRegistration
    ->setCustomer(null);

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * POST /v3/offchain/algo/erc20/deploy
     * 
     * @var \Tatum\Model\DeployAlgoErc20OffchainMnemonicAddress200Response $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainOperations()
        ->deployAlgoErc20OffchainKMSAddress($arg_deploy_algo_erc20_offchain_kms_address);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->blockchainOperations()->deployAlgoErc20OffchainKMSAddress(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->blockchainOperations()->deployAlgoErc20OffchainKMSAddress(): %s\n", 
        $exc->getMessage()
    );
}