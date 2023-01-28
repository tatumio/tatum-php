---
title: Virtual account blockchain fees
parent: API
layout: page
---

# Api/VirtualAccountBlockchainFeesApi

[Virtual account blockchain fees API Reference](https://apidoc.tatum.io/tag/Virtual-account-blockchain-fees/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->virtualAccountBlockchainFees();

// TestNet API Call
$sdk->testnet()->api()->virtualAccountBlockchainFees();
```

## Methods

Method | Description
------------- | -------------
[**offchainEstimateFee()**](#offchainestimatefee) | Estimate ledger to blockchain transaction fee


## `offchainEstimateFee()`

### Example

[👉 View "**offchainEstimateFee.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/VirtualAccountBlockchainFeesApi/offchainEstimateFee.php)

### Request

> **POST** `/v3/offchain/blockchain/estimate`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->virtualAccountBlockchainFees()->offchainEstimateFee(
    \Tatum\Model\OffchainEstimateFee $offchain_estimate_fee
): \Tatum\Model\FeeBtc
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$offchain_estimate_fee** | [**\Tatum\Model\OffchainEstimateFee**](../../Model/OffchainEstimateFee) |  |

### Return type

[**\Tatum\Model\FeeBtc**](../../Model/FeeBtc)

### Description

Estimate ledger to blockchain transaction fee

<h4>2 credits per API call.</h4>

 Estimate current transaction fee for ledger to blockchain transaction.

 Supported blockchains: 

<ul> <li>Bitcoin</li> <li>Litecoin</li> <li>Dogecoin</li> </ul>

[Back to top](#top)

