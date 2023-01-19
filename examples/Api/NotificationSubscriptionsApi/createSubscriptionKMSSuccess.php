<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/NotificationSubscriptionsApi.md#createsubscriptionkmssuccess
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk(); /* <<< Set your API keys here */

$arg_create_subscription_kms_success = (new \Tatum\Model\CreateSubscriptionKMSSuccess())
    
    // Type of the subscription.
    ->setType('KMS_COMPLETED_TX')
    
    // 
    ->setAttr(null);

// Type of Ethereum testnet. Defaults to ethereum-sepolia.
$arg_testnet_type = 'ethereum-sepolia';

try {

    /** @var \Tatum\Model\Id $response */
    $response = $sdk->mainnet()
        ->api()
        ->notificationSubscriptions()
        ->createSubscriptionKMSSuccess($arg_create_subscription_kms_success, $arg_testnet_type);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->notificationSubscriptions()->createSubscriptionKMSSuccess(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->notificationSubscriptions()->createSubscriptionKMSSuccess(): %s\n", 
        $exc->getMessage()
    );
}