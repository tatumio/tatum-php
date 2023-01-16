<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/XRPApi.md#xrpgetaccounttx
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Address of XRP account.
$arg_account = 'account_example';

// Ledger version to start scanning for transactions from.
$arg_min = 3.4;

// Marker from the last paginated request. It is stringified JSON from previous response.
$arg_marker = 'marker_example';

try {

    /** @var \Tatum\Model\XrpAccountTx $response */
    $response = $sdk->mainnet()
        ->api()
        ->xRP()
        ->xrpGetAccountTx($arg_account, $arg_min, $arg_marker);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->xRP()->xrpGetAccountTx(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->xRP()->xrpGetAccountTx(): %s\n", 
        $exc->getMessage()
    );
}