# Tatum/Api/BlockchainUtilsApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAuctionEstimatedTime()**](#getauctionestimatedtime) | **GET** /v3/blockchain/auction/time/{chain}/{date} | Estimate the block height for a future point in time
[**sCGetContractAddress()**](#scgetcontractaddress) | **GET** /v3/blockchain/sc/address/{chain}/{hash} | Get the blockchain address of a smart contract by the deployment transaction ID


## `getAuctionEstimatedTime()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainUtils()->getAuctionEstimatedTime(
    string $chain,
    string $date
): float
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | The blockchain to work with |
 **$date** | **string**  | The date and time in the ISO 8601 standard format |

### Return type

**float**

### Description

Estimate the block height for a future point in time

<p><b>1 credit per API call</b></p> <p>Get an estimated block height (number) for some future point in time.</p> <p>Note that this API returnes an <b>estimation</b> of what the block height might be and <b>not</b> the exact block height.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> </ul>

### Example

[✨ View "getAuctionEstimatedTime.php"](../../examples/Api/BlockchainUtilsApi/getAuctionEstimatedTime.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `sCGetContractAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainUtils()->sCGetContractAddress(
    string $chain,
    string $hash
): \Tatum\Model\SCGetContractAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | The blockchain to work with |
 **$hash** | **string**  | The ID (hash) of the deployment transaction |

### Return type

[**\Tatum\Model\SCGetContractAddress200Response**](../Model/SCGetContractAddress200Response.md)

### Description

Get the blockchain address of a smart contract by the deployment transaction ID

<p><b>1 credit per API call</b></p> <p>Get the blockchain address of a smart contract by the ID of its deployment transaction.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Elrond</li> <li>Ethereum</li> <li>Flow</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>TRON</li> <li>XinFin</li> </ul>

### Example

[✨ View "sCGetContractAddress.php"](../../examples/Api/BlockchainUtilsApi/sCGetContractAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
