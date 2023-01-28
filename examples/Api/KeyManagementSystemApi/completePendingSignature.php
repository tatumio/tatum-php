<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/KeyManagementSystemApi/#completependingsignature
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

// ID of pending transaction
$arg_id = "f91827364f91827364ajdur7";

// transaction ID of blockchain transaction
$arg_tx_id = "0x94Ce79B9F001E25BBEbE7C01998A78F7B27D1326";

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * PUT /v3/kms/{id}/{txId}
     */
    $sdk->mainnet()
        ->api()
        ->keyManagementSystem()
        ->completePendingSignature($arg_id, $arg_tx_id);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->keyManagementSystem()->completePendingSignature(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->keyManagementSystem()->completePendingSignature(): %s\n", 
        $exc->getMessage()
    );
}