# Tatum/Api/BlockchainUtilsApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAuctionEstimatedTime()**](#getauctionestimatedtime) | **GET** /v3/blockchain/auction/time/{chain}/{date} | Estimate the block height for a future point in time
[**sCGetContractAddress()**](#scgetcontractaddress) | **GET** /v3/blockchain/sc/address/{chain}/{hash} | Get the blockchain address of a smart contract by the deployment transaction ID


## `getAuctionEstimatedTime()`

```php
api()->blockchainUtils()->getAuctionEstimatedTime(
    ?string $chain, 
    ?string $date
): float
```

Estimate the block height for a future point in time

<p><b>1 credit per API call</b></p> <p>Get an estimated block height (number) for some future point in time.</p> <p>Note that this API returnes an <b>estimation</b> of what the block height might be and <b>not</b> the exact block height.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// The blockchain to work with
$chain = 'chain_example';

// The date and time in the ISO 8601 standard format
$date = 2021-09-17T07:55:54Z;

try {
    /** @var float $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainUtils()
        ->getAuctionEstimatedTime($chain, $date);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainUtils()->getAuctionEstimatedTime(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainUtils()->getAuctionEstimatedTime(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**| The blockchain to work with |
 **$date** | **string**| The date and time in the ISO 8601 standard format |

### Return type

**float**

[[Back to top]](#) | [[Back to Index]](../index.md)

## `sCGetContractAddress()`

```php
api()->blockchainUtils()->sCGetContractAddress(
    ?string $chain, 
    ?string $hash
): \Tatum\Model\SCGetContractAddress200Response
```

Get the blockchain address of a smart contract by the deployment transaction ID

<p><b>1 credit per API call</b></p> <p>Get the blockchain address of a smart contract by the ID of its deployment transaction.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Elrond</li> <li>Ethereum</li> <li>Flow</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>TRON</li> <li>XinFin</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// The blockchain to work with
$chain = 'chain_example';

// The ID (hash) of the deployment transaction
$hash = '0xe6e7340394958674cdf8606936d292f565e4ecc476aaa8b258ec8a141f7c75d7';

try {
    /** @var \Tatum\Model\SCGetContractAddress200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainUtils()
        ->sCGetContractAddress($chain, $hash);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainUtils()->sCGetContractAddress(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainUtils()->sCGetContractAddress(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**| The blockchain to work with |
 **$hash** | **string**| The ID (hash) of the deployment transaction |

### Return type

[**\Tatum\Model\SCGetContractAddress200Response**](../Model/SCGetContractAddress200Response.md)

[[Back to top]](#) | [[Back to Index]](../index.md)
