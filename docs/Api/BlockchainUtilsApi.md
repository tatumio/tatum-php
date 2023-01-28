---
title: Blockchain utils
parent: API
layout: page
---

# Api/BlockchainUtilsApi

[Blockchain utils API Reference](https://apidoc.tatum.io/tag/Blockchain-utils/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->blockchainUtils();

// TestNet API Call
$sdk->testnet()->api()->blockchainUtils();
```

## Methods

Method | Description
------------- | -------------
[**getAuctionEstimatedTime()**](#getauctionestimatedtime) | Estimate the block height for a future point in time
[**sCGetContractAddress()**](#scgetcontractaddress) | Get the blockchain address of a smart contract by the deployment transaction ID


## `getAuctionEstimatedTime()`

### Example

[👉 View "**getAuctionEstimatedTime.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainUtilsApi/getAuctionEstimatedTime.php)

### Request

> **GET** `/v3/blockchain/auction/time/{chain}/{date}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->blockchainUtils()->getAuctionEstimatedTime(
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

**1 credit per API call**

 Get an estimated block height (number) for some future point in time.

 Note that this API returnes an **estimation** of what the block height might be and **not** the exact block height.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> </ul>

[Back to top](#top)



## `sCGetContractAddress()`

### Example

[👉 View "**sCGetContractAddress.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainUtilsApi/sCGetContractAddress.php)

### Request

> **GET** `/v3/blockchain/sc/address/{chain}/{hash}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->blockchainUtils()->sCGetContractAddress(
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

[**\Tatum\Model\SCGetContractAddress200Response**](../../Model/SCGetContractAddress200Response)

### Description

Get the blockchain address of a smart contract by the deployment transaction ID

**1 credit per API call**

 Get the blockchain address of a smart contract by the ID of its deployment transaction.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Elrond</li> <li>Ethereum</li> <li>Flow</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>TRON</li> <li>XinFin</li> </ul>

[Back to top](#top)

