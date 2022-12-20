# Tatum/Api/DepositApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDeposits()**](#getdeposits) | **GET** /v3/ledger/deposits | List all deposits for product
[**getDepositsCount()**](#getdepositscount) | **GET** /v3/ledger/deposits/count | Count of found entities for get deposits request


## `getDeposits()`

```php
api()->deposit()->getDeposits(
    ?float $page_size, 
    ?float $page, 
    ?string $sort, 
    ?string $status, 
    ?string $currency, 
    ?string $tx_id, 
    ?string $to, 
    ?string $account_id
): \Tatum\Model\Deposit[]
```

List all deposits for product

<h4>1 credit per API call.</h4><br/><p>Lists all deposits for API key.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Max number of items per page is 50.
$page_size = 20;

// Page number
$page = 0;

// Direction of sorting. Can be asc or desc
$sort = 'asc';

// Status of the deposit
$status = 'Done';

// Filter by currency
$currency = 'BTC';

// Filter by txId
$tx_id = 2.0589336591536965E+76;

// Filter by to address
$to = 9.557027372635822E+47;

// Filter by account id
$account_id = '628bae6095e9ad06b52eb229';

try {
    /** @var \Tatum\Model\Deposit[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->deposit()
        ->getDeposits($page_size, $page, $sort, $status, $currency, $tx_id, $to, $account_id);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling deposit()->getDeposits(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling deposit()->getDeposits(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$page_size** | **float**| Max number of items per page is 50. | [optional]
 **$page** | **float**| Page number | [optional]
 **$sort** | **string**| Direction of sorting. Can be asc or desc | [optional]
 **$status** | **string**| Status of the deposit | [optional]
 **$currency** | **string**| Filter by currency | [optional]
 **$tx_id** | **string**| Filter by txId | [optional]
 **$to** | **string**| Filter by to address | [optional]
 **$account_id** | **string**| Filter by account id | [optional]

### Return type

[**\Tatum\Model\Deposit[]**](../Model/Deposit.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `getDepositsCount()`

```php
api()->deposit()->getDepositsCount(
    ?float $page_size, 
    ?float $page, 
    ?string $sort, 
    ?string $status, 
    ?string $currency, 
    ?string $tx_id, 
    ?string $to, 
    ?string $account_id
): \Tatum\Model\EntitiesCount
```

Count of found entities for get deposits request

<h4>1 credit per API call.</h4><br/><p>Counts total entities found by get deposits request.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Max number of items per page is 50.
$page_size = 20;

// Page number
$page = 0;

// Direction of sorting. Can be asc or desc
$sort = 'asc';

// Type of the deposit
$status = 'Done';

// Filter by currency
$currency = 'BTC';

// Filter by txId
$tx_id = 2.0589336591536965E+76;

// Filter by to address
$to = 9.557027372635822E+47;

// Filter by account id
$account_id = '628bae6095e9ad06b52eb229';

try {
    /** @var \Tatum\Model\EntitiesCount $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->deposit()
        ->getDepositsCount($page_size, $page, $sort, $status, $currency, $tx_id, $to, $account_id);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling deposit()->getDepositsCount(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling deposit()->getDepositsCount(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$page_size** | **float**| Max number of items per page is 50. | [optional]
 **$page** | **float**| Page number | [optional]
 **$sort** | **string**| Direction of sorting. Can be asc or desc | [optional]
 **$status** | **string**| Type of the deposit | [optional]
 **$currency** | **string**| Filter by currency | [optional]
 **$tx_id** | **string**| Filter by txId | [optional]
 **$to** | **string**| Filter by to address | [optional]
 **$account_id** | **string**| Filter by account id | [optional]

### Return type

[**\Tatum\Model\EntitiesCount**](../Model/EntitiesCount.md)

[[Back to top]](#) | [[Back to Index]](../index.md)
