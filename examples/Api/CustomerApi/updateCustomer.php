<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/CustomerApi.md#updatecustomer
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Customer internal ID
$arg_id = 'id_example';

$arg_customer_update = (new \Tatum\Model\CustomerUpdate())
    
    // External customer ID. If not set, it will not be updated.
    ->setExternalId('123654')
    
    // (optional) All transaction will be accounted in this currency for all accounts. Currency can be overridden per account level. If not set, it will not be updated. ISO-4217
    ->setAccountingCurrency('USD')
    
    // (optional) Country customer has to be compliant with. If not set, it will not be updated. ISO-3166-1.
    ->setCustomerCountry('US')
    
    // (optional) Country service provider has to be compliant with. If not set, it will not be updated. ISO-3166-1
    ->setProviderCountry('US');

try {
    /** @var \Tatum\Model\Customer $response */
    $response = $sdk->mainnet()
        ->api()
        ->customer()
        ->updateCustomer($arg_id, $arg_customer_update);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->customer()->updateCustomer(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->customer()->updateCustomer(): " . $exc->getMessage() . PHP_EOL;
}