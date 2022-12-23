# Tatum/Local/Wallet/Dogecoin

Dogecoin HD Wallet

Method | Description
------------- | -------------
[**generateWallet()**](#generatewallet) | Generate wallet
[**generateAddressFromXpub()**](#generateaddressfromxpub) | Generate address from xPub and index
[**generateAddressFromPrivateKey()**](#generateaddressfromprivatekey) | Generate address from xPub and index
[**generatePrivateKey()**](#generateprivatekey) | Generate private key from mnemonic and index

## `generateWallet()`

### Type signature

```php
$sdk->{mainnet/testnet}()->local()->wallet()->dogecoin()->generateWallet(
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
        ->dogecoin()
        ->generateWallet($mnemonic);
    
    var_dump($result);
} catch (\Exception $exc) {
    echo 'Exception when calling local()->wallet()->dogecoin()->generateWallet(): ', $exc->getMessage(), PHP_EOL;
}
```

[[Back to top]](#) | [[Back to Local Wallet]](../../index.md#local-wallet)


## `generateAddressFromXpub()`

### Type signature

```php
$sdk->{mainnet/testnet}()->local()->wallet()->dogecoin()->generateAddressFromXpub(
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
$xpub = "tpubDExxmbZbZ8hvcykrL66zGKsWy8p8CUmV4vUErffboQoahPr4goABNmaZnnRgmh8ePRcJ3eHuivEG87HBdsquU3FQJstbxJjKwhtjGiWrpB2";

// Derivation index
$index = 1;

try {
    /** @var \Tatum\Model\GeneratedAddressBtc $result */
    $result = $sdk
        ->testnet()
        ->local()->wallet()
        ->dogecoin()
        ->generateAddressFromXpub($xpub, $index);
    
    var_dump($result);
} catch (\Exception $exc) {
    echo 'Exception when calling local()->wallet()->dogecoin()->generateAddressFromXpub(): ', $exc->getMessage(), PHP_EOL;
}
```

[[Back to top]](#) | [[Back to Local Wallet]](../../index.md#local-wallet)


## `generateAddressFromPrivateKey()`

### Type signature

```php
$sdk->{mainnet/testnet}()->local()->wallet()->dogecoin()->generateAddressFromPrivateKey(
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
$privateKey = (new \Tatum\Model\PrivKey())->setKey("ckYXyxpW7FKp3LPpQdLrXnfttfXa3CBUw6VizABCiQLck1ZVbNq2");

try {
    /** @var \Tatum\Model\GeneratedAddressBtc $result */
    $result = $sdk
        ->testnet()
        ->local()->wallet()
        ->dogecoin()
        ->generateAddressFromPrivateKey($privateKey);
    
    var_dump($result);
} catch (\Exception $exc) {
    echo 'Exception when calling local()->wallet()->dogecoin()->generateAddressFromPrivateKey(): ', $exc->getMessage(), PHP_EOL;
}
```

[[Back to top]](#) | [[Back to Local Wallet]](../../index.md#local-wallet)


## `generatePrivateKey()`

### Type signature

```php
$sdk->{mainnet/testnet}()->local()->wallet()->dogecoin()->generatePrivateKey(
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
        ->dogecoin()
        ->generatePrivateKey($mnemonic, $index);
    
    var_dump($result);
} catch (\Exception $exc) {
    echo 'Exception when calling local()->wallet()->dogecoin()->generatePrivateKey(): ', $exc->getMessage(), PHP_EOL;
}
```

[[Back to top]](#) | [[Back to Local Wallet]](../../index.md#local-wallet)

