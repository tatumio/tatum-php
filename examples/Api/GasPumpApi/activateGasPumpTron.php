<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/GasPumpApi.md#activategaspumptron
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_activate_gas_pump_tron = (new \Tatum\Model\ActivateGasPumpTron())
    
    // The blockchain to work with
    ->setChain('TRON')
    
    // The blockchain address that owns the precalculated gas pump addresses and is used to pay gas fees for operations made on the gas pump addresses; can be referred to as "master address"
    ->setOwner('0x2b5a0bE5940B63dE1eDdCCCa7bd977357e2488eD')
    
    // The start index of the range of gas pump addresses to activate
    ->setFrom(0)
    
    // The end index of the range of gas pump addresses to activate; must be greater than or equal to the value in the <code>from</code> parameter
    ->setTo(200)
    
    // The maximum amount to be paid as the gas fee (in TRX)
    ->setFeeLimit(600)
    
    // The private key of the blockchain address that will pay the gas fee for the activation transaction
    ->setFromPrivateKey('e26c1595086cd52f2bc61774c7228b841db66b4b9b0ed36dc29dbc90595dd5b6');

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->gasPump()
        ->activateGasPumpTron($arg_activate_gas_pump_tron);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->gasPump()->activateGasPumpTron(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->gasPump()->activateGasPumpTron(): " . $exc->getMessage() . PHP_EOL;
}