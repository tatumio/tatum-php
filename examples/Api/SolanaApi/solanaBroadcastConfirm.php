<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/SolanaApi/#solanabroadcastconfirm
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

$arg_solana_broadcast_confirm = (new \Tatum\Model\SolanaBroadcastConfirm())
    
    // Raw signed transaction to be published to network.
    ->setTxData('01de391b34567fc65080dfe9e27170e2f9ac1cd1719878719feb74bb422d1795201df71fcf7349f5')
    
    // (optional) \Tatum\Model\SolanaBroadcastConfirmOptions
    ->setOptions(null);

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * POST /v3/solana/broadcast/confirm
     * 
     * @var \Tatum\Model\SolanaTransactionHashWithConfirm $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->solana()
        ->solanaBroadcastConfirm($arg_solana_broadcast_confirm);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->solana()->solanaBroadcastConfirm(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->solana()->solanaBroadcastConfirm(): %s\n", 
        $exc->getMessage()
    );
}