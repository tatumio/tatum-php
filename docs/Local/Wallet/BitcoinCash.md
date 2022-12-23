# Tatum/Local/Wallet/BitcoinCash

Bitcoin Cash HD Wallet

Method | Description
------------- | -------------
[**generateWallet()**](#generatewallet) | Generate wallet
[**generateAddressFromXpub()**](#generateaddressfromxpub) | Generate address from xPub and index
[**generateAddressFromPrivateKey()**](#generateaddressfromprivatekey) | Generate address from xPub and index
[**generatePrivateKey()**](#generateprivatekey) | Generate private key from mnemonic and index

## `generateWallet()`

### Type signature

```php
$sdk->{mainnet/testnet}()->local()->wallet()->bitcoinCash()->generateWallet(
    ?string $mnemonic
): \Tatum\Model\Wallet
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$mnemonic** | `string` | 24-word mnemonic |  [optional] [default to null]

### Return type

Wallet Model ([**\Tatum\Model\Wallet**](../../Model/Wallet.md))

### Description

Generate wallet

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// 24-word mnemonic
$mnemonic = "police hat quantum advance enroll glove thank build warfare inject invite obscure enable inflict seek web cable answer chest suspect comfort tent source seven";

try {
    /** @var \Tatum\Model\Wallet $result */
    $result = $sdk
        ->testnet()
        ->local()->wallet()
        ->bitcoinCash()
        ->generateWallet($mnemonic);
    
    var_dump($result);
} catch (\Exception $exc) {
    echo 'Exception when calling local()->wallet()->bitcoinCash()->generateWallet(): ', $exc->getMessage(), PHP_EOL;
}
```

[[Back to top]](#) | [[Back to Local Wallet]](../../index.md#local-wallet)


## `generateAddressFromXpub()`

### Type signature

```php
$sdk->{mainnet/testnet}()->local()->wallet()->bitcoinCash()->generateAddressFromXpub(
    ?string $xpub, 
    ?int $index
): \Tatum\Model\GeneratedAddressBtc
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$xpub** | `string` | Extended public key | 
**$index** | `int` | Derivation index | 

### Return type

Address Model ([**\Tatum\Model\GeneratedAddressBtc**](../../Model/GeneratedAddressBtc.md))

### Description

Generate address from xPub and index

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Extended public key
$xpub = "tpubDErTz665Maw22hCxRXYGFtqAWE1yMhH927FRnLHhbZEA8Fudk2cgvBEnzj2dme5Bx48mrmTs7ytv7motQA3XHHxxjptYtQzrudaUoNeBg2D";

// Derivation index
$index = 1;

try {
    /** @var \Tatum\Model\GeneratedAddressBtc $result */
    $result = $sdk
        ->testnet()
        ->local()->wallet()
        ->bitcoinCash()
        ->generateAddressFromXpub($xpub, $index);
    
    var_dump($result);
} catch (\Exception $exc) {
    echo 'Exception when calling local()->wallet()->bitcoinCash()->generateAddressFromXpub(): ', $exc->getMessage(), PHP_EOL;
}
```

[[Back to top]](#) | [[Back to Local Wallet]](../../index.md#local-wallet)


## `generateAddressFromPrivateKey()`

### Type signature

```php
$sdk->{mainnet/testnet}()->local()->wallet()->bitcoinCash()->generateAddressFromPrivateKey(
    ?\Tatum\Model\PrivKey $privateKey
): \Tatum\Model\GeneratedAddressBtc
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$privateKey** | [**\Tatum\Model\PrivKey**](../../Model/PrivKey.md) | Private Key | 

### Return type

Address Model ([**\Tatum\Model\GeneratedAddressBtc**](../../Model/GeneratedAddressBtc.md))

### Description

Generate address from xPub and index

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Private Key
$privateKey = (new \Tatum\Model\PrivKey())->setKey("cUhQBn2AsUtuMBP6n9n17sEg8AUfJdJwtSrQy1vjoAKrRUfrTNF3");

try {
    /** @var \Tatum\Model\GeneratedAddressBtc $result */
    $result = $sdk
        ->testnet()
        ->local()->wallet()
        ->bitcoinCash()
        ->generateAddressFromPrivateKey($privateKey);
    
    var_dump($result);
} catch (\Exception $exc) {
    echo 'Exception when calling local()->wallet()->bitcoinCash()->generateAddressFromPrivateKey(): ', $exc->getMessage(), PHP_EOL;
}
```

[[Back to top]](#) | [[Back to Local Wallet]](../../index.md#local-wallet)


## `generatePrivateKey()`

### Type signature

```php
$sdk->{mainnet/testnet}()->local()->wallet()->bitcoinCash()->generatePrivateKey(
    ?string $mnemonic, 
    ?int $index
): \Tatum\Model\PrivKey
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$mnemonic** | `string` | 24-word mnemonic | 
**$index** | `int` | Derivation index | 

### Return type

Private Key ([**\Tatum\Model\PrivKey**](../../Model/PrivKey.md))

### Description

Generate private key from mnemonic and index

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// 24-word mnemonic
$mnemonic = "police hat quantum advance enroll glove thank build warfare inject invite obscure enable inflict seek web cable answer chest suspect comfort tent source seven";

// Derivation index
$index = 1;

try {
    /** @var \Tatum\Model\PrivKey $result */
    $result = $sdk
        ->testnet()
        ->local()->wallet()
        ->bitcoinCash()
        ->generatePrivateKey($mnemonic, $index);
    
    var_dump($result);
} catch (\Exception $exc) {
    echo 'Exception when calling local()->wallet()->bitcoinCash()->generatePrivateKey(): ', $exc->getMessage(), PHP_EOL;
}
```

[[Back to top]](#) | [[Back to Local Wallet]](../../index.md#local-wallet)

