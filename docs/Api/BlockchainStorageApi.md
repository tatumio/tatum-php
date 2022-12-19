# Tatum/Api/BlockchainStorageApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getLog()**](#getLog) | **GET** /v3/record | Get log record
[**storeLog()**](#storeLog) | **POST** /v3/record | Store log record


## `getLog()`

```php
api()->blockchainStorage()->getLog(
    ?string $chain, 
    ?string $id
): \Tatum\Model\GetLog200Response
```

Get log record

<h4>1 credit per API call.</h4><br/><p>Gets log data from the Ethereum blockchain.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// The blockchain to get the log record from
$chain = 'ETH';

// ID of the log record / transaction on the blockchain
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
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainStorage()->getLog(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**| The blockchain to get the log record from |
 **$id** | **string**| ID of the log record / transaction on the blockchain |

### Return type

[**\Tatum\Model\GetLog200Response**](../Model/GetLog200Response.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `storeLog()`

```php
api()->blockchainStorage()->storeLog(
    ?\Tatum\Model\StoreLogRequest $store_log_request
): \Tatum\Model\TransactionHash
```

Store log record

<h4>2 credits per API call. Additional credits are debited based on the size of the stored data and the type of blockchain.</h4><br/> <p>Stores record data on blockchain. Tatum currently supports the Ethereum, CELO, MATIC, ONE, XDC, BSC, KLAY and EGLD to store data.<br/> The total cost of the transaction (in credits) on the Ethereum blockchain is dependent on the size of the data. Data are stored as a HEX string and the maximum data size is approximatelly 130 kB on mainnet, 30 kB on testnet.<br/> Every 5 characters of data costs 1 credit, so an API call with a data of length 1 kB = 1024 characters and would cost 205 credits. </p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

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
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainStorage()->storeLog(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$store_log_request** | [**\Tatum\Model\StoreLogRequest**](../Model/StoreLogRequest.md)|  |

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)
