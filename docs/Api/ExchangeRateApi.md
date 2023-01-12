# Tatum/Api/ExchangeRateApi

## References

[Exchange rate API documentation](https://apidoc.tatum.io/tag/Exchange-rate/)

## Methods

HTTP requests are relative to https://api.tatum.io

[🔹 **getExchangeRate()**](#getexchangerate) 

> Get the current exchange rate for exchanging fiat/crypto assets
> 
> **GET** `/v3/tatum/rate/{currency}`



## `getExchangeRate()`

> **GET** `/v3/tatum/rate/{currency}`

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

<b>1 credit per API call</b>

 Get the current exchange rate for exchanging fiat/crypto assets.

 By default, the base pair (the target asset) is EUR. When obtaining the exchange rate for an asset (for example, BTC), the value returned by the API expresses the amount of EUR that can be currently exchanged into 1 BTC.

### Example

[✨ View "getExchangeRate.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/ExchangeRateApi/getExchangeRate.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
