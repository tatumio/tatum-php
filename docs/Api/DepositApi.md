---
title: Deposit
parent: API
layout: page
---

# Api/DepositApi

## References

[Deposit API documentation](https://apidoc.tatum.io/tag/Deposit/)

## Methods

HTTP requests are relative to https://api.tatum.io

[🔹 **getDeposits()**](#getdeposits) 

> List all deposits for product
> 
> **GET** `/v3/ledger/deposits`

[🔹 **getDepositsCount()**](#getdepositscount) 

> Count of found entities for get deposits request
> 
> **GET** `/v3/ledger/deposits/count`



## `getDeposits()`

> **GET** `/v3/ledger/deposits`

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

<h4>1 credit per API call.</h4>

Lists all deposits for API key.

### Example

[✨ View "getDeposits.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/DepositApi/getDeposits.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `getDepositsCount()`

> **GET** `/v3/ledger/deposits/count`

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

<h4>1 credit per API call.</h4>

Counts total entities found by get deposits request.

### Example

[✨ View "getDepositsCount.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/DepositApi/getDepositsCount.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
