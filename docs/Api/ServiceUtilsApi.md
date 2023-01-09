# Tatum/Api/ServiceUtilsApi

* Service utils [documentation](https://apidoc.tatum.io/tag/Service-utils/)
* HTTP requests are relative to https://api.tatum.io

Method | HTTP request | Description
------------- | ------------- | -------------
[**freeze Api Key()**](#freezeapikey) | **PUT** `/v3 /tatum /freeze` | Freeze API Key
[**get Credits()**](#getcredits) | **GET** `/v3 /tatum /usage` | Get information about your credit consumption for the last month
[**get Version()**](#getversion) | **GET** `/v3 /tatum /version` | Get API version
[**unfreeze Api Key()**](#unfreezeapikey) | **DELETE** `/v3 /tatum /freeze` | Unfreeze API Key


## `freezeApiKey()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->serviceUtils()->freezeApiKey(
)
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Description

Freeze API Key

<h4>2 credits per API call.</h4><br/><p>Freeze the API Key. It's not possible to perform sensitive operations like send ledger transaction, send off-chain transaction, send blockchain transaction, broadcast blockchain transaction, perform Order book trade or create blockage. Only read operations are permitted.</p>

### Example

[✨ View "freezeApiKey.php"](../../examples/Api/ServiceUtilsApi/freezeApiKey.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `getCredits()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->serviceUtils()->getCredits(
): \Tatum\Model\Consumption[]
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\Consumption[]**](../Model/Consumption.md)

### Description

Get information about your credit consumption for the last month

<p><b>1 credit per API call</b></p> <p>Get information about your credit consumption for the last month (used credits per day).</p>

### Example

[✨ View "getCredits.php"](../../examples/Api/ServiceUtilsApi/getCredits.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `getVersion()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->serviceUtils()->getVersion(
): \Tatum\Model\GetVersion200Response
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\GetVersion200Response**](../Model/GetVersion200Response.md)

### Description

Get API version

<h4>1 credit per API call.</h4><br/><p>Get current version of the API.</p>

### Example

[✨ View "getVersion.php"](../../examples/Api/ServiceUtilsApi/getVersion.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `unfreezeApiKey()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->serviceUtils()->unfreezeApiKey(
)
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Description

Unfreeze API Key

<h4>2 credits per API call.</h4><br/><p>Unfreeze the API Key. It's possible to perform sensitive operations like send ledger transaction, send off-chain transaction, send blockchain transaction, broadcast blockchain transaction, perform Order book trade or create blockage again.</p>

### Example

[✨ View "unfreezeApiKey.php"](../../examples/Api/ServiceUtilsApi/unfreezeApiKey.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
