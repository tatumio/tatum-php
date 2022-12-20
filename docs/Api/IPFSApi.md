# Tatum/Api/IPFSApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getIPFSData()**](#getipfsdata) | **GET** /v3/ipfs/{id} | Get file from IPFS
[**storeIPFS()**](#storeipfs) | **POST** /v3/ipfs | Store data to IPFS


## `getIPFSData()`

```php
api()->iPFS()->getIPFSData(
    ?string $id
): \SplFileObject
```

Get file from IPFS

<h4>1 credit per API call.</h4><br/><p>Gets data from the IPFS.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// IPFS CID of the file
$id = 'QmXJJ6UF5WkF4WTJvsdhiA1etGwBLfpva7Vr9AudGMe3pj';

try {
    /** @var \SplFileObject $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->iPFS()
        ->getIPFSData($id);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling iPFS()->getIPFSData(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling iPFS()->getIPFSData(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**| IPFS CID of the file |

### Return type

**\SplFileObject**

[[Back to top]](#) | [[Back to Index]](../index.md)

## `storeIPFS()`

```php
api()->iPFS()->storeIPFS(
    ?\SplFileObject $file
): \Tatum\Model\StoreIPFS200Response
```

Store data to IPFS

<h4>2 credits per API call. Only files up to 50MB are available for storing.</h4><br/> <p>Stores file on the IPFS. We are leveraging <a href="https://nft.storage/" target="_blank">nft.storage</a> from <a href="https://protocol.ai/" target="_blank">Protocol Labs</a> for free storage on the IPFS.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Your file to store
$file = "/path/to/file.txt";

try {
    /** @var \Tatum\Model\StoreIPFS200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->iPFS()
        ->storeIPFS($file);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling iPFS()->storeIPFS(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling iPFS()->storeIPFS(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$file** | **\SplFileObject****\SplFileObject**| Your file to store | [optional]

### Return type

[**\Tatum\Model\StoreIPFS200Response**](../Model/StoreIPFS200Response.md)

[[Back to top]](#) | [[Back to Index]](../index.md)
