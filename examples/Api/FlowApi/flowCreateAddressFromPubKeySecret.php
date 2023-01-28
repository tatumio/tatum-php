<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/FlowApi/#flowcreateaddressfrompubkeysecret
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

$arg_flow_create_address_from_pub_key_secret = (new \Tatum\Model\FlowCreateAddressFromPubKeySecret())
    
    // Blockchain account to send from
    ->setAccount('0x955cd3f17b2fd8ad')
    
    // Public key to be used; will be assigned to a newly created address and will have a weight of 1000
    ->setPublicKey('968c3ce11e871cb2b7161b282655ee5fcb051f3c04894705d771bf11c6fbebfc6556ab8a0c04f45ea56281312336d0668529077c9d66891a6cad3db877acbe90')
    
    // Secret for account. Secret, or signature Id must be present.
    ->setPrivateKey('37afa218d41d9cd6a2c6f2b96d9eaa3ad96c598252bc50e4d45d62f9356a51f8');

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * POST /v3/flow/account
     * 
     * @var \Tatum\Model\FlowCreateAddressFromPubKeyMnemonic200Response $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->flow()
        ->flowCreateAddressFromPubKeySecret($arg_flow_create_address_from_pub_key_secret);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->flow()->flowCreateAddressFromPubKeySecret(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->flow()->flowCreateAddressFromPubKeySecret(): %s\n", 
        $exc->getMessage()
    );
}