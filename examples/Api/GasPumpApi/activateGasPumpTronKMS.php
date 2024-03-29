<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/GasPumpApi/#activategaspumptronkms
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

// 🐛 Enable debugging on the MainNet
$sdk->mainnet()->config()->setDebug(true);

$arg_activate_gas_pump_tron_kms = (new \Tatum\Model\ActivateGasPumpTronKMS())
    
    // The blockchain to work with
    ->setChain('TRON')
    
    // The blockchain address that owns the precalculated gas pump addresses and is used to pay gas fees...
    ->setOwner('0x2b5a0bE5940B63dE1eDdCCCa7bd977357e2488eD')
    
    // The start index of the range of gas pump addresses to activate
    ->setFrom(0)
    
    // The end index of the range of gas pump addresses to activate; must be greater than or equal to th...
    ->setTo(200)
    
    // The maximum amount to be paid as the gas fee (in TRX)
    ->setFeeLimit(600)
    
    // The KMS identifier of the private key of the blockchain address that will pay the gas fee for the...
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    
    // (optional) (Only if the signature ID is mnemonic-based) The index of the specific address from the mnemonic
    ->setIndex(null);

try {

    /**
     * POST /v3/gas-pump/activate
     * 
     * @var \Tatum\Model\TransactionSigned $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->gasPump()
        ->activateGasPumpTronKMS($arg_activate_gas_pump_tron_kms);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->gasPump()->activateGasPumpTronKMS(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->gasPump()->activateGasPumpTronKMS(): %s\n", 
        $exc->getMessage()
    );
}