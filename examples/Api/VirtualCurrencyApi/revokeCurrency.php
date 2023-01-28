<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/VirtualCurrencyApi/#revokecurrency
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

$arg_virtual_currency_operation = (new \Tatum\Model\VirtualCurrencyOperation())
    
    // Ledger account with currency of the virtual currency, on which the operation will be performed.
    ->setAccountId('5e68c66581f2ee32bc354087')
    
    // Amount of virtual currency to operate within this operation.
    ->setAmount('1.5')
    
    // (optional) Identifier of the payment, shown for created Transaction within Tatum sender account.
    ->setPaymentId('My Payment')
    
    // (optional) Reference of the payment.
    ->setReference('akjsndakjsdn-asd-kjasnd-asdkn-asdjnasjkdn')
    
    // (optional) For bookkeeping to distinct transaction purpose.
    ->setTransactionCode('1_01_EXTERNAL_CODE')
    
    // (optional) Note visible to both, sender and recipient. Available for both Mint and Revoke operations
    ->setRecipientNote('Private note')
    
    // (optional) External account identifier. By default, there is no counterAccount present in the transaction.
    ->setCounterAccount('5e6645712b55823de7ea82f1')
    
    // (optional) Note visible to sender. Available in Revoke operation.
    ->setSenderNote('Sender note');

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * PUT /v3/ledger/virtualCurrency/revoke
     * 
     * @var \Tatum\Model\TransactionResult $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->virtualCurrency()
        ->revokeCurrency($arg_virtual_currency_operation);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->virtualCurrency()->revokeCurrency(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->virtualCurrency()->revokeCurrency(): %s\n", 
        $exc->getMessage()
    );
}