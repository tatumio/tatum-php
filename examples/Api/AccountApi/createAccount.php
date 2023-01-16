<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/AccountApi.md#createaccount
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_create_account = (new \Tatum\Model\CreateAccount())
    
    // <p>The currency for the virtual account</p> <ul> <li><b>Native blockchain assets:</b> ALGO, BCH, ...
    ->setCurrency('BTC')
    
    // (optional) 
    ->setCustomer(null)
    
    // (optional) Enable compliant checks. If this is enabled, it is impossible to create account if compliant chec...
    ->setCompliant(false)
    
    // (optional) For bookkeeping to distinct account purpose.
    ->setAccountCode('AC_1011_B')
    
    // (optional) All transaction will be accounted in this currency for all accounts. Currency can be overridden p...
    ->setAccountingCurrency('USD')
    
    // (optional) Account number from external system.
    ->setAccountNumber('123456');

try {

    /** @var \Tatum\Model\Account $response */
    $response = $sdk->mainnet()
        ->api()
        ->account()
        ->createAccount($arg_create_account);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->account()->createAccount(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->account()->createAccount(): %s\n", 
        $exc->getMessage()
    );
}