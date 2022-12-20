# Tatum/Local/Wallet/Bitcoin

Bitcoin HD Wallet

Method | Description
------------- | -------------
[**generateWallet()**](#generatewallet) | Generate wallet
[**generateAddressFromXpub()**](#generateaddressfromxpub) | Generate address from xPub and index
[**generateAddressFromPrivateKey()**](#generateaddressfromprivatekey) | Generate address from xPub and index
[**generatePrivateKey()**](#generateprivatekey) | Generate private key from mnemonic and index

## `generateWallet()`

```php
local()->wallet()->bitcoin()->generateWallet(
    ?string $mnemonic
): \Tatum\Model\Wallet
```
Generate wallet

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// 24-word mnemonic
$mnemonic = "police hat quantum advance enroll glove thank build warfare inject invite obscure enable inflict seek web cable answer chest suspect comfort tent source seven";

try {
    /** @var \Tatum\Model\Wallet $result */
    $result = $sdk
        ->testnet()
        ->local()->wallet()
        ->bitcoin()
        ->generateWallet($mnemonic);
    
    var_dump($result);
} catch (\Exception $exc) {
    echo 'Exception when calling local()->wallet()->bitcoin()->generateWallet(): ', $exc->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$mnemonic** | `string` | 24-word mnemonic |  [optional] [default to null]

### Return type

Wallet Model ([**\Tatum\Model\Wallet**](../../Model/Wallet.md))

[[Back to top]](#) | [[Back to Local Wallet]](../../index.md#local-wallet)

## `generateAddressFromXpub()`

```php
local()->wallet()->bitcoin()->generateAddressFromXpub(
    ?string $xpub, 
    ?int $index
): \Tatum\Model\GeneratedAddressBtc
```
Generate address from xPub and index

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Extended public key
$xpub = "tpubDExxmbZbZ8hvcykrL66zGKsWy8p8CUmV4vUErffboQoahPr4goABNmaZnnRgmh8ePRcJ3eHuivEG87HBdsquU3FQJstbxJjKwhtjGiWrpB2";

// Derivation index
$index = 1;

try {
    /** @var \Tatum\Model\GeneratedAddressBtc $result */
    $result = $sdk
        ->testnet()
        ->local()->wallet()
        ->bitcoin()
        ->generateAddressFromXpub($xpub, $index);
    
    var_dump($result);
} catch (\Exception $exc) {
    echo 'Exception when calling local()->wallet()->bitcoin()->generateAddressFromXpub(): ', $exc->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$xpub** | `string` | Extended public key | 
**$index** | `int` | Derivation index | 

### Return type

Address Model ([**\Tatum\Model\GeneratedAddressBtc**](../../Model/GeneratedAddressBtc.md))

[[Back to top]](#) | [[Back to Local Wallet]](../../index.md#local-wallet)

## `generateAddressFromPrivateKey()`

```php
local()->wallet()->bitcoin()->generateAddressFromPrivateKey(
    ?\Tatum\Model\PrivKey $privateKey
): \Tatum\Model\GeneratedAddressBtc
```
Generate address from xPub and index

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Private Key
$privateKey = (new \Tatum\Model\PrivKey())->setKey("cTPGqe6hkwVY6JNHJUZ4wSUvPo8GNMe2cDFTsFV1jSqCBMDKpfSU");

try {
    /** @var \Tatum\Model\GeneratedAddressBtc $result */
    $result = $sdk
        ->testnet()
        ->local()->wallet()
        ->bitcoin()
        ->generateAddressFromPrivateKey($privateKey);
    
    var_dump($result);
} catch (\Exception $exc) {
    echo 'Exception when calling local()->wallet()->bitcoin()->generateAddressFromPrivateKey(): ', $exc->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$privateKey** | [**\Tatum\Model\PrivKey**](../../Model/PrivKey.md) | Private Key | 

### Return type

Address Model ([**\Tatum\Model\GeneratedAddressBtc**](../../Model/GeneratedAddressBtc.md))

[[Back to top]](#) | [[Back to Local Wallet]](../../index.md#local-wallet)

## `generatePrivateKey()`

```php
local()->wallet()->bitcoin()->generatePrivateKey(
    ?string $mnemonic, 
    ?int $index
): \Tatum\Model\PrivKey
```
Generate private key from mnemonic and index

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// 24-word mnemonic
$mnemonic = "police hat quantum advance enroll glove thank build warfare inject invite obscure enable inflict seek web cable answer chest suspect comfort tent source seven";

// Derivation index
$index = 1;

try {
    /** @var \Tatum\Model\PrivKey $result */
    $result = $sdk
        ->testnet()
        ->local()->wallet()
        ->bitcoin()
        ->generatePrivateKey($mnemonic, $index);
    
    var_dump($result);
} catch (\Exception $exc) {
    echo 'Exception when calling local()->wallet()->bitcoin()->generatePrivateKey(): ', $exc->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$mnemonic** | `string` | 24-word mnemonic | 
**$index** | `int` | Derivation index | 

### Return type

Private Key ([**\Tatum\Model\PrivKey**](../../Model/PrivKey.md))

[[Back to top]](#) | [[Back to Local Wallet]](../../index.md#local-wallet)