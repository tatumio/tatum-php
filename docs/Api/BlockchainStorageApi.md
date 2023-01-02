# Tatum/Api/BlockchainStorageApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getLog()**](#getlog) | **GET** [/v3/record](https://apidoc.tatum.io/tag/BlockchainStorage#operation/GetLog) | Get a log record
[**storeLog()**](#storelog) | **POST** [/v3/record](https://apidoc.tatum.io/tag/BlockchainStorage#operation/StoreLog) | Store a log record


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
 **$chain** | **string**  | The blockchain to get the log record from |
 **$id** | **string**  | The ID of the log record or transaction to get from the blockchain |

### Return type

[**\Tatum\Model\GetLog200Response**](../Model/GetLog200Response.md)

### Description

Get a log record

<p><b>1 credit per API call</b></p> <p>Get a log data record from the Ethereum blockchain (only the mainnet or the Sepolia testnet).</p>

### Example

[✨ View "getLog.php"](../../examples/Api/BlockchainStorageApi/getLog.php)

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
 **$store_log_request** | [**\Tatum\Model\StoreLogRequest**](../Model/StoreLogRequest.md) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

### Description

Store a log record

<p><b>2 credits per API call + additional credits based on the size of the stored data and the type of the blockchain</b></p> <p>Store data on the blockchain.</p> <p>The total cost of a transaction on Ethereum (in credits) depends on the size of the data. The data is stored as a string in the hexadecimal format, and the maximum size of the data is approximately 130 kB on the mainnet and 30 kB on testnet. Every 5 characters cost 1 credit.<br/> Therefore, one API call with 1 kB of data (1024 characters) would cost 205 credits.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Elrond</li> <li>Ethereum (only the mainnet or the Sepolia testnet)</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> </ul>

### Example

[✨ View "storeLog.php"](../../examples/Api/BlockchainStorageApi/storeLog.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
