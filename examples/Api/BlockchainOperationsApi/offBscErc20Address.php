<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainOperationsApi.md#offbscerc20address
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

$arg_erc20_address = (new \Tatum\Model\Erc20Address())
    
    // The name of the token; used as an identifier within the Tatum platform and as a currency symbol o...
    ->setSymbol('MY_TOKEN')
    
    // The supply of the token
    ->setSupply('1000000.0')
    
    // The number of decimal places that the token has
    ->setDecimals(8)
    
    // The description of the token; used as a description within the Tatum platform and as a currency n...
    ->setDescription('My Public Token')
    
    // The blockchain address to be assigned to the virtual account as a deposit address
    ->setAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // The base pair for the virtual currency that represents the token; used to calculate the value of ...
    ->setBasePair('EUR')
    
    // (optional) The exchange rate for the base pair; one unit of the created virtual currency equals 1 unit of <c...
    ->setBaseRate(1)
    
    // (optional) \Tatum\Model\CustomerRegistration
    ->setCustomer(null)
    
    // (optional) AThe ISO 4217 code of the currency in which all transactions for the created virtual account will...
    ->setAccountingCurrency('USD');

try {

    /**
     * POST /v3/offchain/bsc/bep20
     * 
     * @var \Tatum\Model\Erc20Response $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainOperations()
        ->offBscErc20Address($arg_erc20_address);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->blockchainOperations()->offBscErc20Address(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->blockchainOperations()->offBscErc20Address(): %s\n", 
        $exc->getMessage()
    );
}