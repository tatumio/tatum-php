<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/FlowApi.md#flowcreateaddressfrompubkeymnemonic
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_flow_create_address_from_pub_key_mnemonic = (new \Tatum\Model\FlowCreateAddressFromPubKeyMnemonic())
    
    // Blockchain account to send from
    ->setAccount('0x955cd3f17b2fd8ad')
    
    // Public key to be used; will be assigned to a newly created address and will have a weight of 1000
    ->setPublicKey('968c3ce11e871cb2b7161b282655ee5fcb051f3c04894705d771bf11c6fbebfc6556ab8a0c04f45ea56281312336d0668529077c9d66891a6cad3db877acbe90')
    
    // Mnemonic to generate private key.
    ->setMnemonic('urge pulp usage sister evidence arrest palm math please chief egg abuse')
    
    // Index to the specific address from mnemonic.
    ->setIndex(null);

try {

    /** @var \Tatum\Model\FlowCreateAddressFromPubKeyMnemonic200Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->flow()
        ->flowCreateAddressFromPubKeyMnemonic($arg_flow_create_address_from_pub_key_mnemonic);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->flow()->flowCreateAddressFromPubKeyMnemonic(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->flow()->flowCreateAddressFromPubKeyMnemonic(): %s\n", 
        $exc->getMessage()
    );
}