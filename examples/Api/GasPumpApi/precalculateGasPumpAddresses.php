<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/GasPumpApi/#precalculategaspumpaddresses
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

$arg_create_gas_pump = (new \Tatum\Model\CreateGasPump())
    
    // The blockchain to work with
    ->setChain('ETH')
    
    // The blockchain address that will own the precalculated gas pump addresses and will be used to pay...
    ->setOwner('0x2b5a0bE5940B63dE1eDdCCCa7bd977357e2488eD')
    
    // The start index of the range of gas pump addresses to precalculate
    ->setFrom(0)
    
    // The end index of the range of gas pump addresses to precalculate; must be greater than or equal t...
    ->setTo(1000);

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * POST /v3/gas-pump
     * 
     * @var string[] $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->gasPump()
        ->precalculateGasPumpAddresses($arg_create_gas_pump);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->gasPump()->precalculateGasPumpAddresses(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->gasPump()->precalculateGasPumpAddresses(): %s\n", 
        $exc->getMessage()
    );
}