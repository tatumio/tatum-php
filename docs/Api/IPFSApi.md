# Tatum/Api/IPFSApi

## References

[IPFS API documentation](https://apidoc.tatum.io/tag/IPFS/)

## Methods

HTTP requests are relative to https://api.tatum.io

[🔹 **getIPFSData()**](#getipfsdata) 

> Get file from IPFS
> 
> **GET** `/v3/ipfs/{id}`

[🔹 **storeIPFS()**](#storeipfs) 

> Store data to IPFS
> 
> **POST** `/v3/ipfs`



## `getIPFSData()`

> **GET** `/v3/ipfs/{id}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->iPFS()->getIPFSData(
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

Get file from IPFS

<h4>1 credit per API call.</h4><br/><p>Gets data from the IPFS.</p>

### Example

[✨ View "getIPFSData.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/IPFSApi/getIPFSData.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `storeIPFS()`

> **POST** `/v3/ipfs`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->iPFS()->storeIPFS(
    [ \SplFileObject $file ]
): \Tatum\Model\StoreIPFS200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$file** | **\SplFileObject** **\SplFileObject**  | Your file to store | [optional]

### Return type

[**\Tatum\Model\StoreIPFS200Response**](../Model/StoreIPFS200Response.md)

### Description

Store data to IPFS

<h4>2 credits per API call. Only files up to 50MB are available for storing.</h4><br/> <p>Stores file on the IPFS. We are leveraging <a href="https://nft.storage/" target="_blank">nft.storage</a> from <a href="https://protocol.ai/" target="_blank">Protocol Labs</a> for free storage on the IPFS.</p>

### Example

[✨ View "storeIPFS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/IPFSApi/storeIPFS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
