<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/NotificationSubscriptionsApi.md#enablewebhookhmac
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk(); /* <<< Set your API keys here */

$arg_hmac_web_hook = (new \Tatum\Model\HmacWebHook())
    
    // Your HMAC secret password, which is used for signing the webhook payload.
    ->setHmacSecret('1f7f7c0c-3906-4aa1-9dfe-4b67c43918f6');

try {

    $sdk->mainnet()
        ->api()
        ->notificationSubscriptions()
        ->enableWebHookHmac($arg_hmac_web_hook);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->notificationSubscriptions()->enableWebHookHmac(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->notificationSubscriptions()->enableWebHookHmac(): %s\n", 
        $exc->getMessage()
    );
}