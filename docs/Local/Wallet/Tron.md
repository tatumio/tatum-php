---
title: Tron
parent: Local/Wallet
layout: page
---

# Local/Wallet/Tron

Tron HD Wallet

Method | Description
------------- | -------------
[**generateWallet()**](#generatewallet) | Generate wallet
[**generateAddressFromXpub()**](#generateaddressfromxpub) | Generate address from xPub and index
[**generateAddressFromPrivateKey()**](#generateaddressfromprivatekey) | Generate address from xPub and index
[**generatePrivateKey()**](#generateprivatekey) | Generate private key from mnemonic and index

# `generateWallet()`

## Type signature

```php
$sdk->{mainnet/testnet}()->local()->wallet()->tron()->generateWallet(
    [ string $mnemonic = null ]
): \Tatum\Model\Wallet
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$mnemonic** | `string` | 24-word mnemonic |  [optional] [default to null]

### Return type

Wallet Model ([**\Tatum\Model\Wallet**](../../../Model/Wallet.md))

### Description

Generate wallet

### Example

[✨ View "generateWallet.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Local/Wallet/Tron/generateWallet.php)

[[Back to top]](#top)


# `generateAddressFromXpub()`

## Type signature

```php
$sdk->{mainnet/testnet}()->local()->wallet()->tron()->generateAddressFromXpub(
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

Address Model ([**\Tatum\Model\GeneratedAddressBtc**](../../../Model/GeneratedAddressBtc.md))

### Description

Generate address from xPub and index

### Example

[✨ View "generateAddressFromXpub.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Local/Wallet/Tron/generateAddressFromXpub.php)

[[Back to top]](#top)


# `generateAddressFromPrivateKey()`

## Type signature

```php
$sdk->{mainnet/testnet}()->local()->wallet()->tron()->generateAddressFromPrivateKey(
    \Tatum\Model\PrivKey $privateKey
): \Tatum\Model\GeneratedAddressBtc
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$privateKey** | [**\Tatum\Model\PrivKey**](../../../Model/PrivKey.md) | Private Key | 

### Return type

Address Model ([**\Tatum\Model\GeneratedAddressBtc**](../../../Model/GeneratedAddressBtc.md))

### Description

Generate address from xPub and index

### Example

[✨ View "generateAddressFromPrivateKey.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Local/Wallet/Tron/generateAddressFromPrivateKey.php)

[[Back to top]](#top)


# `generatePrivateKey()`

## Type signature

```php
$sdk->{mainnet/testnet}()->local()->wallet()->tron()->generatePrivateKey(
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

Private Key ([**\Tatum\Model\PrivKey**](../../../Model/PrivKey.md))

### Description

Generate private key from mnemonic and index

### Example

[✨ View "generatePrivateKey.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Local/Wallet/Tron/generatePrivateKey.php)

[[Back to top]](#top)

