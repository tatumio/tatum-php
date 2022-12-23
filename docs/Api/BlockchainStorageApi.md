# Tatum/Api/BlockchainStorageApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getLog()**](#getlog) | **GET** /v3/record | Get a log record
[**storeLog()**](#storelog) | **POST** /v3/record | Store a log record


## `getLog()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainStorage()->getLog(
    string $chain,
    string $id
): \Tatum\Model\GetLog200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**| The blockchain to get the log record from |
 **$id** | **string**| The ID of the log record or transaction to get from the blockchain |

### Return type

[**\Tatum\Model\GetLog200Response**](../Model/GetLog200Response.md)

### Description

Get a log record

<p><b>1 credit per API call</b></p> <p>Get a log data record from the Ethereum blockchain (only the mainnet or the Sepolia testnet).</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// The blockchain to get the log record from
$chain = 'ETH';

// The ID of the log record or transaction to get from the blockchain
$id = '0x94Ce79B9F001E25BBEbE7C01998A78F7B27D1326';

try {
    /** @var \Tatum\Model\GetLog200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainStorage()
        ->getLog($chain, $id);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainStorage()->getLog(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainStorage()->getLog(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `storeLog()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainStorage()->storeLog(
    \Tatum\Model\StoreLogRequest $store_log_request
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$store_log_request** | [**\Tatum\Model\StoreLogRequest**](../Model/StoreLogRequest.md)|  |

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

### Description

Store a log record

<p><b>2 credits per API call + additional credits based on the size of the stored data and the type of the blockchain</b></p> <p>Store data on the blockchain.</p> <p>The total cost of a transaction on Ethereum (in credits) depends on the size of the data. The data is stored as a string in the hexadecimal format, and the maximum size of the data is approximately 130 kB on the mainnet and 30 kB on testnet. Every 5 characters cost 1 credit.<br/> Therefore, one API call with 1 kB of data (1024 characters) would cost 205 credits.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Elrond</li> <li>Ethereum (only the mainnet or the Sepolia testnet)</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> </ul>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$store_log_request = new \Tatum\Model\StoreLogRequest();

try {
    /** @var \Tatum\Model\TransactionHash $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainStorage()
        ->storeLog($store_log_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainStorage()->storeLog(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainStorage()->storeLog(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
