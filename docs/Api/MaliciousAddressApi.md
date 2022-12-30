# Tatum/Api/MaliciousAddressApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkMalicousAddress()**](#checkmalicousaddress) | **GET** /v3/security/address/{address} | Check malicous address


## `checkMalicousAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->maliciousAddress()->checkMalicousAddress(
    string $address
): \Tatum\Model\CheckMalicousAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Blockchain Address to check |

### Return type

[**\Tatum\Model\CheckMalicousAddress200Response**](../Model/CheckMalicousAddress200Response.md)

### Description

Check malicous address

<h4>1 credit per API call.</h4><br/> <p>Check, if the blockchain address is malicous. Malicous address can contain assets from the DarkWeb, is connected to the scam projects or contains stolen funds.</p><br/> <p>Supported Chains: ETH, BTC, LTC</p>

### Example

[✨ View "checkMalicousAddress.php"](../../examples/Api/MaliciousAddressApi/checkMalicousAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
