<?php
/**
 * Copyright (c) 2022-2023 Tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Auction#operation/UpdateAuctionFeeRecipient
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/AuctionApi.md#updateauctionfeerecipient
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_update_auction_fee_recipient_request = new \Tatum\Model\UpdateAuctionFeeRecipientRequest();

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->auction()
        ->updateAuctionFeeRecipient($arg_update_auction_fee_recipient_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->auction()->updateAuctionFeeRecipient(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->auction()->updateAuctionFeeRecipient(): " . $exc->getMessage() . PHP_EOL;
}