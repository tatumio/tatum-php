<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/NotificationSubscriptionsApi.md#getallwebhookscount
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Max number of items per page is 50.
$arg_page_size = 10;

// Offset to obtain the next page of data.
$arg_offset = 0;

// Direction of sorting
$arg_direction = "asc";

// Flag indicating whether the webhook was successful or not
$arg_failed = false;

try {

    /** @var \Tatum\Model\EntitiesCount $response */
    $response = $sdk->mainnet()
        ->api()
        ->notificationSubscriptions()
        ->getAllWebhooksCount($arg_page_size, $arg_offset, $arg_direction, $arg_failed);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->notificationSubscriptions()->getAllWebhooksCount(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->notificationSubscriptions()->getAllWebhooksCount(): %s\n", 
        $exc->getMessage()
    );
}