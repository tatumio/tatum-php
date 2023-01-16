<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainOperationsApi.md#erc20address
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_erc20_address = (new \Tatum\Model\Erc20Address())
    
    // The name of the token; used as an identifier within the Tatum platform and as a currency symbol on the blockchain<br/>The token name that you specify here must be the same as the token name in the <code>symbol</code> parameter of the smart contract that you <a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20Deploy" target="_blank">are going to deploy or have already deployed</a> for this token.
    ->setSymbol('MY_TOKEN')
    
    // The supply of the token
    ->setSupply('1000000.0')
    
    // The number of decimal places that the token has
    ->setDecimals(8)
    
    // The description of the token; used as a description within the Tatum platform and as a currency name on the blockchain
    ->setDescription('My Public Token')
    
    // The blockchain address to be assigned to the virtual account as a deposit address
    ->setAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // The base pair for the virtual currency that represents the token; used to calculate the value of a transaction
    ->setBasePair('EUR')
    
    // (optional) The exchange rate for the base pair; one unit of the created virtual currency equals 1 unit of <code>basePair</code>*<code>baseRate</code>
    ->setBaseRate(1)
    
    // (optional) 
    ->setCustomer(null)
    
    // (optional) AThe ISO 4217 code of the currency in which all transactions for the created virtual account will be billed
    ->setAccountingCurrency('USD');

try {
    /** @var \Tatum\Model\Erc20Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainOperations()
        ->erc20Address($arg_erc20_address);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainOperations()->erc20Address(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainOperations()->erc20Address(): " . $exc->getMessage() . PHP_EOL;
}