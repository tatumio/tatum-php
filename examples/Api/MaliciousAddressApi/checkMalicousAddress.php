<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/MaliciousAddressApi/#checkmalicousaddress
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

// Blockchain Address to check
$arg_address = "0x002Bf459dC58584D58886169EA0E80f3Ca95FFAF";

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * GET /v3/security/address/{address}
     * 
     * @var \Tatum\Model\CheckMalicousAddress200Response $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->maliciousAddress()
        ->checkMalicousAddress($arg_address);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->maliciousAddress()->checkMalicousAddress(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->maliciousAddress()->checkMalicousAddress(): %s\n", 
        $exc->getMessage()
    );
}