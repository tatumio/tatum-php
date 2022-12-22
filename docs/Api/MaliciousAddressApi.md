# Tatum/Api/MaliciousAddressApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkMalicousAddress()**](#checkmalicousaddress) | **GET** /v3/security/address/{address} | Check malicous address


## `checkMalicousAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->maliciousAddress()->checkMalicousAddress(
    ?string $address
): \Tatum\Model\CheckMalicousAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**| Blockchain Address to check |

### Return type

[**\Tatum\Model\CheckMalicousAddress200Response**](../Model/CheckMalicousAddress200Response.md)

### Description

Check malicous address

<h4>1 credit per API call.</h4><br/> <p>Check, if the blockchain address is malicous. Malicous address can contain assets from the DarkWeb, is connected to the scam projects or contains stolen funds.</p><br/> <p>Supported Chains: ETH, BTC, LTC</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Blockchain Address to check
$address = '0x002Bf459dC58584D58886169EA0E80f3Ca95FFAF';

try {
    /** @var \Tatum\Model\CheckMalicousAddress200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->maliciousAddress()
        ->checkMalicousAddress($address);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling maliciousAddress()->checkMalicousAddress(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling maliciousAddress()->checkMalicousAddress(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
