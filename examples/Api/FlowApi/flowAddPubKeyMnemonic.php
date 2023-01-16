<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/FlowApi.md#flowaddpubkeymnemonic
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_flow_add_pub_key_mnemonic = (new \Tatum\Model\FlowAddPubKeyMnemonic())
    
    // Blockchain account to send from
    ->setAccount('0x955cd3f17b2fd8ad')
    
    // Public key to be used
    ->setPublicKey('968c3ce11e871cb2b7161b282655ee5fcb051f3c04894705d771bf11c6fbebfc6556ab8a0c04f45ea56281312336d0668529077c9d66891a6cad3db877acbe90')
    
    // Mnemonic to generate private key.
    ->setMnemonic('urge pulp usage sister evidence arrest palm math please chief egg abuse')
    
    // Index to the specific address from mnemonic.
    ->setIndex(null)
    
    // (optional) Weight of the key. If not set, default 1000 will be used.
    ->setWeight(1000);

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->flow()
        ->flowAddPubKeyMnemonic($arg_flow_add_pub_key_mnemonic);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->flow()->flowAddPubKeyMnemonic(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->flow()->flowAddPubKeyMnemonic(): " . $exc->getMessage() . PHP_EOL;
}