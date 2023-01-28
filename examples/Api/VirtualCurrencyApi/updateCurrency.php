<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/VirtualCurrencyApi/#updatecurrency
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

$arg_virtual_currency_update = (new \Tatum\Model\VirtualCurrencyUpdate())
    
    // Virtual currency name, which will be updated. It is not possible to update the name of the virtua...
    ->setName('VC_VIRTUAL')
    
    // (optional) Exchange rate of the base pair. Each unit of the created curency will represent value of baseRate...
    ->setBaseRate(1)
    
    // (optional) Base pair for virtual currency. Transaction value will be calculated according to this base pair....
    ->setBasePair('EUR');

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * PUT /v3/ledger/virtualCurrency
     */
    $sdk->mainnet()
        ->api()
        ->virtualCurrency()
        ->updateCurrency($arg_virtual_currency_update);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->virtualCurrency()->updateCurrency(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->virtualCurrency()->updateCurrency(): %s\n", 
        $exc->getMessage()
    );
}