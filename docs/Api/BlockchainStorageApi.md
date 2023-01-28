---
title: Blockchain storage
parent: API
layout: page
---

# Api/BlockchainStorageApi

[Blockchain storage API Reference](https://apidoc.tatum.io/tag/Blockchain-storage/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->blockchainStorage();

// TestNet API Call
$sdk->testnet()->api()->blockchainStorage();
```

## Methods

Method | Description
------------- | -------------
[**createRecord()**](#createrecord) | Store a log record
[**createRecordCelo()**](#createrecordcelo) | Store a log record
[**createRecordKMS()**](#createrecordkms) | Store a log record
[**getLog()**](#getlog) | Get a log record


## `createRecord()`

### Example

[👉 View "**createRecord.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainStorageApi/createRecord.php)

### Request

> **POST** `/v3/record`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->blockchainStorage()->createRecord(
    \Tatum\Model\CreateRecord $create_record
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_record** | [**\Tatum\Model\CreateRecord**](../../Model/CreateRecord) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../../Model/TransactionHash)

### Description

Store a log record

**2 credits per API call + additional credits based on the size of the stored data and the type of the blockchain**

 Store data on the blockchain.

 The total cost of a transaction on Ethereum (in credits) depends on the size of the data. The data is stored as a string in the hexadecimal format, and the maximum size of the data is approximately 130 kB on the mainnet and 30 kB on testnet. Every 5 characters cost 1 credit.

 Therefore, one API call with 1 kB of data (1024 characters) would cost 205 credits.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Elrond</li> <li>Ethereum (only the mainnet or the Sepolia testnet)</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>XDC</li> </ul>

[Back to top](#top)



## `createRecordCelo()`

### Example

[👉 View "**createRecordCelo.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainStorageApi/createRecordCelo.php)

### Request

> **POST** `/v3/record`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->blockchainStorage()->createRecordCelo(
    \Tatum\Model\CreateRecordCelo $create_record_celo
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_record_celo** | [**\Tatum\Model\CreateRecordCelo**](../../Model/CreateRecordCelo) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../../Model/TransactionHash)

### Description

Store a log record

CreateRecordCelo operation

[Back to top](#top)



## `createRecordKMS()`

### Example

[👉 View "**createRecordKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainStorageApi/createRecordKMS.php)

### Request

> **POST** `/v3/record`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->blockchainStorage()->createRecordKMS(
    \Tatum\Model\CreateRecordKMS $create_record_kms
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_record_kms** | [**\Tatum\Model\CreateRecordKMS**](../../Model/CreateRecordKMS) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../../Model/TransactionHash)

### Description

Store a log record

CreateRecordKMS operation

[Back to top](#top)



## `getLog()`

### Example

[👉 View "**getLog.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainStorageApi/getLog.php)

### Request

> **GET** `/v3/record`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->blockchainStorage()->getLog(
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

[**\Tatum\Model\GetLog200Response**](../../Model/GetLog200Response)

### Description

Get a log record

**1 credit per API call**

 Get a log data record from the Ethereum blockchain (only the mainnet or the Sepolia testnet).

[Back to top](#top)

