<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/AccountApi/#createaccount
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

$arg_create_account = (new \Tatum\Model\CreateAccount())
    
    // <p>The currency for the virtual account</p> <ul> <li><b>Native blockchain assets:</b> ALGO, BCH, ...
    ->setCurrency('BTC')
    
    // (optional) \Tatum\Model\CustomerRegistration
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

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * POST /v3/ledger/account
     * 
     * @var \Tatum\Model\Account $response
     */
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