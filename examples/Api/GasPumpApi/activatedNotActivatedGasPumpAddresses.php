<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/GasPump#operation/ActivatedNotActivatedGasPumpAddresses
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/GasPumpApi.md#activatednotactivatedgaspumpaddresses
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// The blockchain to work with
$arg_chain = 'ETH';

// The ID of the address activation transaction
$arg_tx_id = '0x94Ce79B9F001E25BBEbE7C01998A78F7B27D1326';

try {
    /** @var \Tatum\Model\GasPumpTrxOut $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->gasPump()
        ->activatedNotActivatedGasPumpAddresses($arg_chain, $arg_tx_id);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->gasPump()->activatedNotActivatedGasPumpAddresses(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->gasPump()->activatedNotActivatedGasPumpAddresses(): " . $exc->getMessage() . PHP_EOL;
}