---
title: IPFS
parent: API
layout: page
---

# Api/IPFSApi

[IPFS API Reference](https://apidoc.tatum.io/tag/IPFS/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->iPFS();

// TestNet API Call
$sdk->testnet()->api()->iPFS();
```

## Methods

Method | Description
------------- | -------------
[**getIPFSData()**](#getipfsdata) | Get file from IPFS
[**storeIPFS()**](#storeipfs) | Store data to IPFS


## `getIPFSData()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **getIPFSData.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/IPFSApi/getIPFSData.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/ipfs/{id}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->iPFS()->getIPFSData(
    string $id
): \SplFileObject
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | IPFS CID of the file |

### Return type

**\SplFileObject**

### Description

> Get file from IPFS

#### 1 credit per API call.

Gets data from the IPFS.

[Back to top](#top){: .btn .btn-purple }

---


## `storeIPFS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **storeIPFS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/IPFSApi/storeIPFS.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/ipfs`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->iPFS()->storeIPFS(
    [ \SplFileObject $file ]
): \Tatum\Model\StoreIPFS200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$file** | **\SplFileObject** **\SplFileObject**  | Your file to store | [optional]

### Return type

[**\Tatum\Model\StoreIPFS200Response**](../../Model/StoreIPFS200Response)

### Description

> Store data to IPFS

#### 2 credits per API call. Only files up to 50MB are available for storing.

Stores file on the IPFS. We are leveraging [nft.storage](https://nft.storage/) from [Protocol Labs](https://protocol.ai/) for free storage on the IPFS.

[Back to top](#top){: .btn .btn-purple }

---
