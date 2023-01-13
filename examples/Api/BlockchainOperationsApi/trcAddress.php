<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainOperationsApi.md#trcaddress
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_trc_address = (new \Tatum\Model\TrcAddress())
    ->setSymbol('MY_TOKEN')
    ->setSupply('1000000.0')
    ->setDecimals(6)
    ->setType('TRC10')
    ->setDescription('My Public Token')
    ->setAddress('TVAEYCmc15awaDRAjUZ1kvcHwQQaoPw2CW')
    ->setUrl('https://mytoken.com')
    ->setBasePair('EUR')
    ->setBaseRate(1)/* optional */
    ->setCustomer(null)/* optional */
    ->setAccountingCurrency('USD')/* optional */;

try {
    /** @var \Tatum\Model\Trc20Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainOperations()
        ->trcAddress($arg_trc_address);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainOperations()->trcAddress(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainOperations()->trcAddress(): " . $exc->getMessage() . PHP_EOL;
}