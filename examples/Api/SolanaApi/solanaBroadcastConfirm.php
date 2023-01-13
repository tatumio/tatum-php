<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/SolanaApi.md#solanabroadcastconfirm
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_solana_broadcast_confirm = new \Tatum\Model\SolanaBroadcastConfirm();

try {

    /** @var \Tatum\Model\SolanaTransactionHashWithConfirm $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->solana()
        ->solanaBroadcastConfirm($arg_solana_broadcast_confirm);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->solana()->solanaBroadcastConfirm(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->solana()->solanaBroadcastConfirm(): " . $exc->getMessage() . PHP_EOL;
}