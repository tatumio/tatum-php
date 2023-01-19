<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/AccountApi.md#blockamount
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk(); /* <<< Set your API keys here */

// Account ID
$arg_id = "5e6be89ee6aa436299950c3f";

$arg_block_amount = (new \Tatum\Model\BlockAmount())
    
    // The amount to be blocked on the account
    ->setAmount('5')
    
    // The type of the blockage that you are applying; can be a code or an identifier from an external s...
    ->setType('DEBIT_CARD_OP')
    
    // (optional) The description of the blockage that you are applying
    ->setDescription('Card payment in the shop.');

try {

    /** @var \Tatum\Model\Id $response */
    $response = $sdk->mainnet()
        ->api()
        ->account()
        ->blockAmount($arg_id, $arg_block_amount);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->account()->blockAmount(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->account()->blockAmount(): %s\n", 
        $exc->getMessage()
    );
}