# Tatum/Local/Transaction/BitcoinCash

Bitcoin Cash Transaction

Method | Description
------------- | -------------
[**sign()**](#sign) | Sign transaction

## `sign()`

### Type signature

```php
$sdk->{mainnet/testnet}()->local()->transaction()->bitcoinCash()->sign(
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
  ->setChangeAddress('bchtest:qqsnnrvk28rj7lzg7tvlyw8s7xa2vqvj0yxq2xn9ld')
  ->addSource('cUhQBn2AsUtuMBP6n9n17sEg8AUfJdJwtSrQy1vjoAKrRUfrTNF3', str_repeat('0', 64), 0, '1010000000')
  ->addTarget('bchtest:qqsnnrvk28rj7lzg7tvlyw8s7xa2vqvj0yxq2xn9l0', 1);

try {
    /** @var string $result */
    $result = $sdk
        ->testnet()
        ->local()->transaction()
        ->bitcoinCash()
        ->sign($transfer);
    
    var_dump($result);
} catch (\Exception $exc) {
    echo 'Exception when calling local()->transaction()->bitcoinCash()->sign(): ', $exc->getMessage(), PHP_EOL;
}
```

[[Back to top]](#) | [[Back to Local Transaction]](../../index.md#local-transaction)

