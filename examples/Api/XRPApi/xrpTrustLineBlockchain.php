<?php
/**
 * Copyright (c) 2022-2023 Tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/XRP#operation/XrpTrustLineBlockchain
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/XRPApi.md#xrptrustlineblockchain
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_xrp_trust_line_blockchain_request = new \Tatum\Model\XrpTrustLineBlockchainRequest();

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->xRP()
        ->xrpTrustLineBlockchain($arg_xrp_trust_line_blockchain_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->xRP()->xrpTrustLineBlockchain(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->xRP()->xrpTrustLineBlockchain(): " . $exc->getMessage() . PHP_EOL;
}