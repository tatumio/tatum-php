<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/BlockchainFeesApi/#estimatefee
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

$arg_estimate_fee = (new \Tatum\Model\EstimateFee())
    
    // Blockchain to estimate fee for.
    ->setChain('null')
    
    // Type of transaction
    ->setType('null')
    
    // (optional) Sender address, if type is TRANSFER_ERC20
    ->setSender('0xfb99f8ae9b70a0c8cd96ae665bbaf85a7e01a2ef')
    
    // (optional) Blockchain address to send assets, if type is TRANSFER_ERC20
    ->setRecipient('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // (optional) Contract address of ERC20 token, if type is TRANSFER_ERC20
    ->setContractAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // (optional) Amount to be sent in ERC20, if type is TRANSFER_ERC20
    ->setAmount('100000');

try {

    /**
     * POST /v3/blockchain/estimate
     * 
     * @var \Tatum\Model\EstimateFee200Response $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainFees()
        ->estimateFee($arg_estimate_fee);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->blockchainFees()->estimateFee(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->blockchainFees()->estimateFee(): %s\n", 
        $exc->getMessage()
    );
}