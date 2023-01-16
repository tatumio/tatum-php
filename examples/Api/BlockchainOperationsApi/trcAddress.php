<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainOperationsApi.md#trcaddress
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_trc_address = (new \Tatum\Model\TrcAddress())
    
    // The name of the token; used as an identifier within the Tatum platform and as a currency symbol on the blockchain
    ->setSymbol('MY_TOKEN')
    
    // The supply of the token
    ->setSupply('1000000.0')
    
    // The number of decimal places that the token has
    ->setDecimals(6)
    
    // The type of the token
    ->setType('TRC10')
    
    // The description of the token; used as a description within the Tatum platform and as a currency name on the blockchain
    ->setDescription('My Public Token')
    
    // The blockchain address to be assigned to the virtual account as a deposit address
    ->setAddress('TVAEYCmc15awaDRAjUZ1kvcHwQQaoPw2CW')
    
    // (TRC-10 tokens only) The URL of the project that the token is created for<br/>Use this parameter only with TRC-10 tokens. Do <b>not</b> use this parameter with TRC-20 tokens.
    ->setUrl('https://mytoken.com')
    
    // The base pair for the virtual currency that represents the token; used to calculate the value of a transaction
    ->setBasePair('EUR')
    
    // (optional) The exchange rate for the base pair; one unit of the created virtual currency equals 1 unit of <code>basePair</code>*<code>baseRate</code>
    ->setBaseRate(1)
    
    // (optional) 
    ->setCustomer(null)
    
    // (optional) The ISO 4217 code of the currency in which all transactions for the created virtual account will be billed
    ->setAccountingCurrency('USD');

try {
    /** @var \Tatum\Model\Trc20Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainOperations()
        ->trcAddress($arg_trc_address);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainOperations()->trcAddress(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainOperations()->trcAddress(): " . $exc->getMessage() . PHP_EOL;
}