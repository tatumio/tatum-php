---
title: Ethereum
parent: Local/Transaction
layout: page
---

# Local/Transaction/Ethereum

```php
$sdk = new \Tatum\Sdk();

// MainNet Local/Transaction/Ethereum
$sdk->mainnet()->local()->transaction()->ethereum();

// TestNet Local/Transaction/Ethereum
$sdk->testnet()->local()->transaction()->ethereum();
```

Ethereum Transaction

Method | Description
------------- | -------------
[**sign()**](#sign) | Sign transaction

# `sign()`

## Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->local()->transaction()->ethereum()->sign(
    \Tatum\Model\TransferEthBlockchain $transfer
): string
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$transfer** | [**\Tatum\Model\TransferEthBlockchain**](../../../Model/TransferEthBlockchain) | Transfer request | 

### Return type

Signed transaction hex (`string`)

### Description

Sign transaction

### Example

[✨ View "sign.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Local/Transaction/Ethereum/sign.php)

[Back to top](#top)

