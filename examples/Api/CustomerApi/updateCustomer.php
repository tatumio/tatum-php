<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/CustomerApi/#updatecustomer
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

// Customer internal ID
$arg_id = 'id_example';

$arg_customer_update = (new \Tatum\Model\CustomerUpdate())
    
    // External customer ID. If not set, it will not be updated.
    ->setExternalId('123654')
    
    // (optional) All transaction will be accounted in this currency for all accounts. Currency can be overridden p...
    ->setAccountingCurrency('USD')
    
    // (optional) Country customer has to be compliant with. If not set, it will not be updated. ISO-3166-1.
    ->setCustomerCountry('US')
    
    // (optional) Country service provider has to be compliant with. If not set, it will not be updated. ISO-3166-1
    ->setProviderCountry('US');

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * PUT /v3/ledger/customer/{id}
     * 
     * @var \Tatum\Model\Customer $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->customer()
        ->updateCustomer($arg_id, $arg_customer_update);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->customer()->updateCustomer(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->customer()->updateCustomer(): %s\n", 
        $exc->getMessage()
    );
}