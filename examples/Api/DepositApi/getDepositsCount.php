<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/DepositApi.md#getdepositscount
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
$arg_page_size = 20;

// Page number
$arg_page = 0;

// Direction of sorting. Can be asc or desc
$arg_sort = "asc";

// Type of the deposit
$arg_status = "Done";

// Filter by currency
$arg_currency = "BTC";

// Filter by txId
$arg_tx_id = "2.0589336591536965E+76";

// Filter by to address
$arg_to = "9.557027372635822E+47";

// Filter by account id
$arg_account_id = "628bae6095e9ad06b52eb229";

try {
    /** @var \Tatum\Model\EntitiesCount $response */
    $response = $sdk->mainnet()
        ->api()
        ->deposit()
        ->getDepositsCount($arg_page_size, $arg_page, $arg_sort, $arg_status, $arg_currency, $arg_tx_id, $arg_to, $arg_account_id);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->deposit()->getDepositsCount(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->deposit()->getDepositsCount(): " . $exc->getMessage() . PHP_EOL;
}