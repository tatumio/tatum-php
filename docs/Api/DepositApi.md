---
title: Deposit
parent: API
layout: page
---

# Api/DepositApi

[Deposit API Reference](https://apidoc.tatum.io/tag/Deposit/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->deposit();

// TestNet API Call
$sdk->testnet()->api()->deposit();
```

## Methods

Method | Description
------------- | -------------
[**getDeposits()**](#getdeposits) | List all deposits for product
[**getDepositsCount()**](#getdepositscount) | Count of found entities for get deposits request


## `getDeposits()`

### Example

[👉 View "**getDeposits.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/DepositApi/getDeposits.php)

### Request

> **GET** `/v3/ledger/deposits`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->deposit()->getDeposits(
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

[**\Tatum\Model\Deposit[]**](../../Model/Deposit)

### Description

List all deposits for product

<h4>1 credit per API call.</h4>

Lists all deposits for API key.

[Back to top](#top)



## `getDepositsCount()`

### Example

[👉 View "**getDepositsCount.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/DepositApi/getDepositsCount.php)

### Request

> **GET** `/v3/ledger/deposits/count`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->deposit()->getDepositsCount(
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

[**\Tatum\Model\EntitiesCount**](../../Model/EntitiesCount)

### Description

Count of found entities for get deposits request

<h4>1 credit per API call.</h4>

Counts total entities found by get deposits request.

[Back to top](#top)

