<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/CustomerApi.md#getcustomerbyexternalorinternalid
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// Customer external or internal ID
$arg_id = 'id_example';

try {

    /**
     * GET /v3/ledger/customer/{id}
     * 
     * @var \Tatum\Model\Customer $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->customer()
        ->getCustomerByExternalOrInternalId($arg_id);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->customer()->getCustomerByExternalOrInternalId(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->customer()->getCustomerByExternalOrInternalId(): %s\n", 
        $exc->getMessage()
    );
}