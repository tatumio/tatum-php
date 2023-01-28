---
title: Service utils
parent: API
layout: page
---

# Api/ServiceUtilsApi

[Service utils API Reference](https://apidoc.tatum.io/tag/Service-utils/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->serviceUtils();

// TestNet API Call
$sdk->testnet()->api()->serviceUtils();
```

## Methods

Method | Description
------------- | -------------
[**freezeApiKey()**](#freezeapikey) | Freeze API Key
[**getCredits()**](#getcredits) | Get information about your credit consumption for the last month
[**getVersion()**](#getversion) | Get API version
[**unfreezeApiKey()**](#unfreezeapikey) | Unfreeze API Key


## `freezeApiKey()`

### Example

[👉 View "**freezeApiKey.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/ServiceUtilsApi/freezeApiKey.php)

### Request

> **PUT** `/v3/tatum/freeze`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->serviceUtils()->freezeApiKey()
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Description

Freeze API Key

<h4>2 credits per API call.</h4>

Freeze the API Key. It's not possible to perform sensitive operations like send ledger transaction, send off-chain transaction, send blockchain transaction, broadcast blockchain transaction, perform Order book trade or create blockage. Only read operations are permitted.

[Back to top](#top)



## `getCredits()`

### Example

[👉 View "**getCredits.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/ServiceUtilsApi/getCredits.php)

### Request

> **GET** `/v3/tatum/usage`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->serviceUtils()->getCredits(): \Tatum\Model\Consumption[]
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\Consumption[]**](../../Model/Consumption)

### Description

Get information about your credit consumption for the last month

**1 credit per API call**

 Get information about your credit consumption for the last month (used credits per day).

[Back to top](#top)



## `getVersion()`

### Example

[👉 View "**getVersion.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/ServiceUtilsApi/getVersion.php)

### Request

> **GET** `/v3/tatum/version`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->serviceUtils()->getVersion(): \Tatum\Model\GetVersion200Response
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\GetVersion200Response**](../../Model/GetVersion200Response)

### Description

Get API version

<h4>1 credit per API call.</h4>

Get current version of the API.

[Back to top](#top)



## `unfreezeApiKey()`

### Example

[👉 View "**unfreezeApiKey.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/ServiceUtilsApi/unfreezeApiKey.php)

### Request

> **DELETE** `/v3/tatum/freeze`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->serviceUtils()->unfreezeApiKey()
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Description

Unfreeze API Key

<h4>2 credits per API call.</h4>

Unfreeze the API Key. It's possible to perform sensitive operations like send ledger transaction, send off-chain transaction, send blockchain transaction, broadcast blockchain transaction, perform Order book trade or create blockage again.

[Back to top](#top)

