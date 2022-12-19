# Tatum/Api/ServiceUtilsApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**freezeApiKey()**](#freezeApiKey) | **PUT** /v3/tatum/freeze | Freeze API Key
[**getCredits()**](#getCredits) | **GET** /v3/tatum/usage | Get information about your credit consumption for the last month
[**getVersion()**](#getVersion) | **GET** /v3/tatum/version | Get API version
[**unfreezeApiKey()**](#unfreezeApiKey) | **DELETE** /v3/tatum/freeze | Unfreeze API Key


## `freezeApiKey()`

```php
api()->serviceUtils()->freezeApiKey(
)
```

Freeze API Key

<h4>2 credits per API call.</h4><br/><p>Freeze the API Key. It's not possible to perform sensitive operations like send ledger transaction, send off-chain transaction, send blockchain transaction, broadcast blockchain transaction, perform Order book trade or create blockage. Only read operations are permitted.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

try {
        $sdk
        ->mainnet()
        ->api()
        ->serviceUtils()
        ->freezeApiKey();
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling serviceUtils()->freezeApiKey(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling serviceUtils()->freezeApiKey(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `getCredits()`

```php
api()->serviceUtils()->getCredits(
): \Tatum\Model\Consumption[]
```

Get information about your credit consumption for the last month

<p><b>1 credit per API call</b></p> <p>Get information about your credit consumption for the last month (used credits per day).</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

try {
    /** @var \Tatum\Model\Consumption[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->serviceUtils()
        ->getCredits();
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling serviceUtils()->getCredits(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling serviceUtils()->getCredits(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\Consumption[]**](../Model/Consumption.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `getVersion()`

```php
api()->serviceUtils()->getVersion(
): \Tatum\Model\GetVersion200Response
```

Get API version

<h4>1 credit per API call.</h4><br/><p>Get current version of the API.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

try {
    /** @var \Tatum\Model\GetVersion200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->serviceUtils()
        ->getVersion();
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling serviceUtils()->getVersion(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling serviceUtils()->getVersion(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\GetVersion200Response**](../Model/GetVersion200Response.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `unfreezeApiKey()`

```php
api()->serviceUtils()->unfreezeApiKey(
)
```

Unfreeze API Key

<h4>2 credits per API call.</h4><br/><p>Unfreeze the API Key. It's possible to perform sensitive operations like send ledger transaction, send off-chain transaction, send blockchain transaction, broadcast blockchain transaction, perform Order book trade or create blockage again.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

try {
        $sdk
        ->mainnet()
        ->api()
        ->serviceUtils()
        ->unfreezeApiKey();
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling serviceUtils()->unfreezeApiKey(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling serviceUtils()->unfreezeApiKey(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)
