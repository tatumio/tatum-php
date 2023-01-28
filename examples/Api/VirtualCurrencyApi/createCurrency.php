<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/VirtualCurrencyApi/#createcurrency
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

$arg_virtual_currency = (new \Tatum\Model\VirtualCurrency())
    
    // Virtual currency name. Must be prefixed with 'VC_'.
    ->setName('VC_VIRTUAL')
    
    // Supply of virtual currency.
    ->setSupply('1000000')
    
    // Base pair for virtual currency. Transaction value will be calculated according to this base pair....
    ->setBasePair('BTC')
    
    // (optional) Exchange rate of the base pair. Each unit of the created curency will represent value of baseRate...
    ->setBaseRate(1)
    
    // (optional) \Tatum\Model\CustomerRegistration
    ->setCustomer(null)
    
    // (optional) Used as a description within Tatum system.
    ->setDescription('My Virtual Token description.')
    
    // (optional) For bookkeeping to distinct account purpose.
    ->setAccountCode('AC_1011_B')
    
    // (optional) Account number from external system.
    ->setAccountNumber('1234567890')
    
    // (optional) All transaction will be billed in this currency for created account associated with this currency...
    ->setAccountingCurrency('USD');

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * POST /v3/ledger/virtualCurrency
     * 
     * @var \Tatum\Model\Account $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->virtualCurrency()
        ->createCurrency($arg_virtual_currency);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->virtualCurrency()->createCurrency(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->virtualCurrency()->createCurrency(): %s\n", 
        $exc->getMessage()
    );
}