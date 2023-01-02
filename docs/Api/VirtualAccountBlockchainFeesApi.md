# Tatum/Api/VirtualAccountBlockchainFeesApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**offchainEstimateFee()**](#offchainestimatefee) | **POST** [/v3/offchain/blockchain/estimate](https://apidoc.tatum.io/tag/VirtualAccountBlockchainFees#operation/offchainEstimateFee) | Estimate ledger to blockchain transaction fee


## `offchainEstimateFee()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->virtualAccountBlockchainFees()->offchainEstimateFee(
    \Tatum\Model\OffchainEstimateFee $offchain_estimate_fee
): \Tatum\Model\FeeBtc
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$offchain_estimate_fee** | [**\Tatum\Model\OffchainEstimateFee**](../Model/OffchainEstimateFee.md) |  |

### Return type

[**\Tatum\Model\FeeBtc**](../Model/FeeBtc.md)

### Description

Estimate ledger to blockchain transaction fee

<h4>2 credits per API call.</h4><br/> <p>Estimate current transaction fee for ledger to blockchain transaction.<br/> Supported blockchains: <ul> <li>Bitcoin</li> <li>Litecoin</li> <li>Dogecoin</li> </ul> </p>

### Example

[✨ View "offchainEstimateFee.php"](../../examples/Api/VirtualAccountBlockchainFeesApi/offchainEstimateFee.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
