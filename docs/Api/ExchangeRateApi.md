# Tatum/Api/ExchangeRateApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getExchangeRate()**](#getexchangerate) | **GET** /v3/tatum/rate/{currency} | Get the current exchange rate for exchanging fiat/crypto assets


## `getExchangeRate()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->exchangeRate()->getExchangeRate(
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

[**\Tatum\Model\ExchangeRate**](../Model/ExchangeRate.md)

### Description

Get the current exchange rate for exchanging fiat/crypto assets

<p><b>1 credit per API call</b></p> <p>Get the current exchange rate for exchanging fiat/crypto assets.</p> <p>By default, the base pair (the target asset) is EUR. When obtaining the exchange rate for an asset (for example, BTC), the value returned by the API expresses the amount of EUR that can be currently exchanged into 1 BTC.</p>

### Example

[✨ View "getExchangeRate.php"](../../samples/Api/ExchangeRateApi/getExchangeRate.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
