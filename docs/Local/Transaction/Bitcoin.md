# Tatum/Local/Transaction/Bitcoin

Bitcoin Transaction

Method | Description
------------- | -------------
[**sign()**](#sign) | Sign transaction

## `sign()`

### Type signature

```php
$sdk->{mainnet/testnet}()->local()->transaction()->bitcoin()->sign(
    ?\Tatum\Local\Transaction\Bitcoin\Transfer $transfer
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

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Transfer object
$transfer = (new \Tatum\Local\Transaction\Bitcoin\Transfer())
  ->setFee('0.01')
  ->setChangeAddress('tb1q97n8qc4n3qcd8thlfs0c0299thzqyrq6mwz5jn')
  ->addSource('cTPGqe6hkwVY6JNHJUZ4wSUvPo8GNMe2cDFTsFV1jSqCBMDKpfSU', str_repeat('0', 64), 0, '1010000000')
  ->addTarget('tb1q97n8qc4n3qcd8thlfs0c0299thzqyrq6mwz5j0', 1);

try {
    /** @var string $result */
    $result = $sdk
        ->testnet()
        ->local()->transaction()
        ->bitcoin()
        ->sign($transfer);
    
    var_dump($result);
} catch (\Exception $exc) {
    echo 'Exception when calling local()->transaction()->bitcoin()->sign(): ', $exc->getMessage(), PHP_EOL;
}
```

[[Back to top]](#) | [[Back to Local Transaction]](../../index.md#local-transaction)

