# Tatum/Api/DepositApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDeposits()**](#getdeposits) | **GET** [/v3/ledger/deposits](https://apidoc.tatum.io/tag/Deposit#operation/getDeposits) | List all deposits for product
[**getDepositsCount()**](#getdepositscount) | **GET** [/v3/ledger/deposits/count](https://apidoc.tatum.io/tag/Deposit#operation/getDepositsCount) | Count of found entities for get deposits request


## `getDeposits()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->deposit()->getDeposits(
    [ float $page_size, ]
    [ float $page, ]
    [ string $sort, ]
    [ string $status, ]
    [ string $currency, ]
    [ string $tx_id, ]
    [ string $to, ]
    [ string $account_id ]
): \Tatum\Model\Deposit[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$page_size** | **float**  | Max number of items per page is 50. | [optional]
 **$page** | **float**  | Page number | [optional]
 **$sort** | **string**  | Direction of sorting. Can be asc or desc | [optional]
 **$status** | **string**  | Status of the deposit | [optional]
 **$currency** | **string**  | Filter by currency | [optional]
 **$tx_id** | **string**  | Filter by txId | [optional]
 **$to** | **string**  | Filter by to address | [optional]
 **$account_id** | **string**  | Filter by account id | [optional]

### Return type

[**\Tatum\Model\Deposit[]**](../Model/Deposit.md)

### Description

List all deposits for product

<h4>1 credit per API call.</h4><br/><p>Lists all deposits for API key.</p>

### Example

[✨ View "getDeposits.php"](../../examples/Api/DepositApi/getDeposits.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `getDepositsCount()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->deposit()->getDepositsCount(
    [ float $page_size, ]
    [ float $page, ]
    [ string $sort, ]
    [ string $status, ]
    [ string $currency, ]
    [ string $tx_id, ]
    [ string $to, ]
    [ string $account_id ]
): \Tatum\Model\EntitiesCount
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$page_size** | **float**  | Max number of items per page is 50. | [optional]
 **$page** | **float**  | Page number | [optional]
 **$sort** | **string**  | Direction of sorting. Can be asc or desc | [optional]
 **$status** | **string**  | Type of the deposit | [optional]
 **$currency** | **string**  | Filter by currency | [optional]
 **$tx_id** | **string**  | Filter by txId | [optional]
 **$to** | **string**  | Filter by to address | [optional]
 **$account_id** | **string**  | Filter by account id | [optional]

### Return type

[**\Tatum\Model\EntitiesCount**](../Model/EntitiesCount.md)

### Description

Count of found entities for get deposits request

<h4>1 credit per API call.</h4><br/><p>Counts total entities found by get deposits request.</p>

### Example

[✨ View "getDepositsCount.php"](../../examples/Api/DepositApi/getDepositsCount.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
