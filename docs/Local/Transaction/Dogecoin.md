# Tatum/Local/Transaction/Dogecoin

Dogecoin Transaction

Method | Description
------------- | -------------
[**sign()**](#sign) | Sign transaction

## `sign()`

### Type signature

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

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Transfer object
$transfer = (new \Tatum\Local\Transaction\Bitcoin\Transfer())
  ->setFee('0.01')
  ->setChangeAddress('nYY7QfwDEbYsb7xpC7yms6SzjMhbYdr5vy')
  ->addSource('ckYXyxpW7FKp3LPpQdLrXnfttfXa3CBUw6VizABCiQLck1ZVbNq2', str_repeat('0', 64), 0, '1010000000')
  ->addTarget('nYY7QfwDEbYsb7xpC7yms6SzjMhbYdr5v0', 1);

try {
    /** @var string $result */
    $result = $sdk
        ->testnet()
        ->local()->transaction()
        ->dogecoin()
        ->sign($transfer);
    
    var_dump($result);
} catch (\Exception $exc) {
    echo 'Exception when calling local()->transaction()->dogecoin()->sign(): ', $exc->getMessage(), PHP_EOL;
}
```

[[Back to top]](#) | [[Back to Local Transaction]](../../index.md#local-transaction)

