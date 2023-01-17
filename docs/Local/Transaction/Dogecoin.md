---
title: Dogecoin
parent: Local/Transaction
layout: page
---

# Local/Transaction/Dogecoin

Dogecoin Transaction

Method | Description
------------- | -------------
[**sign()**](#sign) | Sign transaction

# `sign()`

## Type signature

```php
$sdk->{mainnet/testnet}()->local()->transaction()->dogecoin()->sign(
    \Tatum\Local\Transaction\Bitcoin\Transfer $transfer
): string
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$transfer** | `\Tatum\Local\Transaction\Bitcoin\Transfer` | Transfer object | 

### Return type

Signed transaction hex (`string`)

### Description

Sign transaction

### Example

[✨ View "sign.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Local/Transaction/Dogecoin/sign.php)

[[Back to top]](#top)

