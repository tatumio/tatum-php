---
title: Exchange rate
parent: API
layout: page
---

# Api/ExchangeRateApi

[Exchange rate API Reference](https://apidoc.tatum.io/tag/Exchange-rate/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->exchangeRate();

// TestNet API Call
$sdk->testnet()->api()->exchangeRate();
```

## Methods

Method | Description
------------- | -------------
[**getExchangeRate()**](#getexchangerate) | Get the current exchange rate for exchanging fiat/crypto assets


## `getExchangeRate()`

### Example

[👉 View "**getExchangeRate.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/ExchangeRateApi/getExchangeRate.php)

### Request

> **GET** `/v3/tatum/rate/{currency}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->exchangeRate()->getExchangeRate(
    string $currency,
    [ string $base_pair = 'EUR' ]
): \Tatum\Model\ExchangeRate
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$currency** | **string**  | The fiat or crypto asset to exchange |
 **$base_pair** | **string**  | The target fiat asset to get the exchange rate for | [optional] [default to &#39;EUR&#39;]

### Return type

[**\Tatum\Model\ExchangeRate**](../../Model/ExchangeRate)

### Description

Get the current exchange rate for exchanging fiat/crypto assets

**1 credit per API call**

 Get the current exchange rate for exchanging fiat/crypto assets.

 By default, the base pair (the target asset) is EUR. When obtaining the exchange rate for an asset (for example, BTC), the value returned by the API expresses the amount of EUR that can be currently exchanged into 1 BTC.

[Back to top](#top)

