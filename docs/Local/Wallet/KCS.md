# Tatum/Local/Wallet/KCS

KCS HD Wallet

Method | Description
------------- | -------------
[**generateWallet()**](#generatewallet) | Generate wallet
[**generateAddressFromXpub()**](#generateaddressfromxpub) | Generate address from xPub and index
[**generateAddressFromPrivateKey()**](#generateaddressfromprivatekey) | Generate address from xPub and index
[**generatePrivateKey()**](#generateprivatekey) | Generate private key from mnemonic and index

## `generateWallet()`

### Type signature

```php
$sdk->{mainnet/testnet}()->local()->wallet()->kcs()->generateWallet(
    [ string $mnemonic = null ]
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
        ->kcs()
        ->generateWallet($mnemonic);
    
    var_dump($result);
} catch (\Exception $exc) {
    echo 'Exception when calling local()->wallet()->kcs()->generateWallet(): ', $exc->getMessage(), PHP_EOL;
}
```

[[Back to top]](#) | [[Back to Local Wallet]](../../index.md#local-wallet)


## `generateAddressFromXpub()`

### Type signature

```php
$sdk->{mainnet/testnet}()->local()->wallet()->kcs()->generateAddressFromXpub(
    string $xpub,
    int $index
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
$xpub = "xpub6EbLFMjuqrkUMBZzsu7u4QY9e1iUD6GRXHswW7cTTW3gx7BMcaK6EKujYkLuFCBQbX5PS4n3BpQDRvnaF1zfabo7FH9JGn56MkJKWkGjeHY";

// Derivation index
$index = 1;

try {
    /** @var \Tatum\Model\GeneratedAddressBtc $result */
    $result = $sdk
        ->testnet()
        ->local()->wallet()
        ->kcs()
        ->generateAddressFromXpub($xpub, $index);
    
    var_dump($result);
} catch (\Exception $exc) {
    echo 'Exception when calling local()->wallet()->kcs()->generateAddressFromXpub(): ', $exc->getMessage(), PHP_EOL;
}
```

[[Back to top]](#) | [[Back to Local Wallet]](../../index.md#local-wallet)


## `generateAddressFromPrivateKey()`

### Type signature

```php
$sdk->{mainnet/testnet}()->local()->wallet()->kcs()->generateAddressFromPrivateKey(
    \Tatum\Model\PrivKey $privateKey
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
$privateKey = (new \Tatum\Model\PrivKey())->setKey("0xad25407b6dba3907b1d001ddfecf909ba94fcdf4f4aead108709598b125e9585");

try {
    /** @var \Tatum\Model\GeneratedAddressBtc $result */
    $result = $sdk
        ->testnet()
        ->local()->wallet()
        ->kcs()
        ->generateAddressFromPrivateKey($privateKey);
    
    var_dump($result);
} catch (\Exception $exc) {
    echo 'Exception when calling local()->wallet()->kcs()->generateAddressFromPrivateKey(): ', $exc->getMessage(), PHP_EOL;
}
```

[[Back to top]](#) | [[Back to Local Wallet]](../../index.md#local-wallet)


## `generatePrivateKey()`

### Type signature

```php
$sdk->{mainnet/testnet}()->local()->wallet()->kcs()->generatePrivateKey(
    string $mnemonic,
    int $index
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
        ->kcs()
        ->generatePrivateKey($mnemonic, $index);
    
    var_dump($result);
} catch (\Exception $exc) {
    echo 'Exception when calling local()->wallet()->kcs()->generatePrivateKey(): ', $exc->getMessage(), PHP_EOL;
}
```

[[Back to top]](#) | [[Back to Local Wallet]](../../index.md#local-wallet)

