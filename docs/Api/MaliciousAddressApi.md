# Tatum/Api/MaliciousAddressApi

## References

[Malicious address API documentation](https://apidoc.tatum.io/tag/Malicious-address/)

## Methods

HTTP requests are relative to https://api.tatum.io

[🔹 **checkMalicousAddress()**](#checkmalicousaddress) 

> Check malicous address
> 
> **GET** `/v3/security/address/{address}`



## `checkMalicousAddress()`

> **GET** `/v3/security/address/{address}`

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

<h4>1 credit per API call.</h4>



 Check, if the blockchain address is malicous. Malicous address can contain assets from the DarkWeb, is connected to the scam projects or contains stolen funds.



 Supported Chains: ETH, BTC, LTC

### Example

[✨ View "checkMalicousAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MaliciousAddressApi/checkMalicousAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
