---
title: Dogecoin
parent: Local/Transaction
layout: page
---

# Local/Transaction/Dogecoin

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet Local/Transaction/Dogecoin
$sdk->mainnet()->local()->transaction()->dogecoin();

// TestNet Local/Transaction/Dogecoin
$sdk->testnet()->local()->transaction()->dogecoin();
```

Dogecoin Transaction

Method | Description
------------- | -------------
[**sign()**](#sign) | Sign transaction

# `sign()`

## Example

[👉 View "**sign.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Local/Transaction/Dogecoin/sign.php)

## Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->local()->transaction()->dogecoin()->sign(
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

