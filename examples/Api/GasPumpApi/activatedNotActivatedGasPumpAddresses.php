<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/GasPumpApi/#activatednotactivatedgaspumpaddresses
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

// The blockchain to work with
$arg_chain = "ETH";

// The ID of the address activation transaction
$arg_tx_id = "0x94Ce79B9F001E25BBEbE7C01998A78F7B27D1326";

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * GET /v3/gas-pump/address/{chain}/{txId}
     * 
     * @var \Tatum\Model\GasPumpTrxOut $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->gasPump()
        ->activatedNotActivatedGasPumpAddresses($arg_chain, $arg_tx_id);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->gasPump()->activatedNotActivatedGasPumpAddresses(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->gasPump()->activatedNotActivatedGasPumpAddresses(): %s\n", 
        $exc->getMessage()
    );
}