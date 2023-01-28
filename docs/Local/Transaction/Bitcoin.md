---
title: Bitcoin
parent: Local/Transaction
layout: page
---

# Local/Transaction/Bitcoin

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet Local/Transaction/Bitcoin
$sdk->mainnet()->local()->transaction()->bitcoin();

// TestNet Local/Transaction/Bitcoin
$sdk->testnet()->local()->transaction()->bitcoin();
```

Bitcoin Transaction

Method | Description
------------- | -------------
[**sign()**](#sign) | Sign transaction

# `sign()`

## Example

[👉 View "**sign.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Local/Transaction/Bitcoin/sign.php)

## Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->local()->transaction()->bitcoin()->sign(
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

