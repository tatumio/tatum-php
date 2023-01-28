---
title: Litecoin
parent: Local/Transaction
layout: page
---

# Local/Transaction/Litecoin

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet Local/Transaction/Litecoin
$sdk->mainnet()->local()->transaction()->litecoin();

// TestNet Local/Transaction/Litecoin
$sdk->testnet()->local()->transaction()->litecoin();
```

Litecoin Transaction

Method | Description
------------- | -------------
[**sign()**](#sign) | Sign transaction

# `sign()`

## Example

[👉 View "**sign.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Local/Transaction/Litecoin/sign.php)

## Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->local()->transaction()->litecoin()->sign(
    \Tatum\Local\Transaction\Bitcoin\Transfer $transfer
): string
```

## Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$transfer** | `\Tatum\Local\Transaction\Bitcoin\Transfer` | Transfer object | 

## Return type

Signed transaction hex (`string`)

## Description

Sign transaction

[Back to top](#top)

