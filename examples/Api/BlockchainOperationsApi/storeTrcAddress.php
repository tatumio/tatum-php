<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainOperationsApi.md#storetrcaddress
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// TRC-10 Token ID or TRC-20 contract address
$arg_address = "TVAEYCmc15awaDRAjUZ1kvcHwQQaoPw2CW";

// TRC 10/20 symbol name.
$arg_name = "MY_TOKEN";

try {

    $sdk->mainnet()
        ->api()
        ->blockchainOperations()
        ->storeTrcAddress($arg_address, $arg_name);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->blockchainOperations()->storeTrcAddress(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->blockchainOperations()->storeTrcAddress(): %s\n", 
        $exc->getMessage()
    );
}