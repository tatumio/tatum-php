<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainOperationsApi.md#erc20address
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_erc20_address = (new \Tatum\Model\Erc20Address())
    ->setSymbol('MY_TOKEN')
    ->setSupply('1000000.0')
    ->setDecimals(8)
    ->setDescription('My Public Token')
    ->setAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    ->setBasePair('EUR')
    ->setBaseRate(1)/* optional */
    ->setCustomer(null)/* optional */
    ->setAccountingCurrency('USD')/* optional */;

try {
    /** @var \Tatum\Model\Erc20Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainOperations()
        ->erc20Address($arg_erc20_address);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainOperations()->erc20Address(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainOperations()->erc20Address(): " . $exc->getMessage() . PHP_EOL;
}