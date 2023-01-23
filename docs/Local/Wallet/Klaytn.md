---
title: Klaytn
parent: Local/Wallet
layout: page
---

# Local/Wallet/Klaytn

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet Local/Wallet/Klaytn
$sdk->mainnet()->local()->wallet()->klaytn();

// TestNet Local/Wallet/Klaytn
$sdk->testnet()->local()->wallet()->klaytn();
```

Klaytn HD Wallet

Method | Description
------------- | -------------
[**generateWallet()**](#generatewallet) | Generate wallet
[**generateAddressFromXpub()**](#generateaddressfromxpub) | Generate address from xPub and index
[**generateAddressFromPrivateKey()**](#generateaddressfromprivatekey) | Generate address from xPub and index
[**generatePrivateKey()**](#generateprivatekey) | Generate private key from mnemonic and index

# `generateWallet()`

## Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->local()->wallet()->klaytn()->generateWallet(
    [ string $mnemonic = null ]
): \Tatum\Model\Wallet
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$mnemonic** | `string` | 24-word mnemonic |  [optional] [default to null]

### Return type

Wallet Model ([**\Tatum\Model\Wallet**](../../../Model/Wallet))

### Description

Generate wallet

### Example

[✨ View "generateWallet.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Local/Wallet/Klaytn/generateWallet.php)

[Back to top](#top)


# `generateAddressFromXpub()`

## Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->local()->wallet()->klaytn()->generateAddressFromXpub(
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

Address Model ([**\Tatum\Model\GeneratedAddressBtc**](../../../Model/GeneratedAddressBtc))

### Description

Generate address from xPub and index

### Example

[✨ View "generateAddressFromXpub.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Local/Wallet/Klaytn/generateAddressFromXpub.php)

[Back to top](#top)


# `generateAddressFromPrivateKey()`

## Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->local()->wallet()->klaytn()->generateAddressFromPrivateKey(
    \Tatum\Model\PrivKey $privateKey
): \Tatum\Model\GeneratedAddressBtc
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$privateKey** | [**\Tatum\Model\PrivKey**](../../../Model/PrivKey) | Private Key | 

### Return type

Address Model ([**\Tatum\Model\GeneratedAddressBtc**](../../../Model/GeneratedAddressBtc))

### Description

Generate address from xPub and index

### Example

[✨ View "generateAddressFromPrivateKey.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Local/Wallet/Klaytn/generateAddressFromPrivateKey.php)

[Back to top](#top)


# `generatePrivateKey()`

## Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->local()->wallet()->klaytn()->generatePrivateKey(
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

Private Key ([**\Tatum\Model\PrivKey**](../../../Model/PrivKey))

### Description

Generate private key from mnemonic and index

### Example

[✨ View "generatePrivateKey.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Local/Wallet/Klaytn/generatePrivateKey.php)

[Back to top](#top)

