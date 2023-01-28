---
title: Ethereum
parent: Local/Wallet
layout: page
---

# Local/Wallet/Ethereum

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet Local/Wallet/Ethereum
$sdk->mainnet()->local()->wallet()->ethereum();

// TestNet Local/Wallet/Ethereum
$sdk->testnet()->local()->wallet()->ethereum();
```

Ethereum HD Wallet

Method | Description
------------- | -------------
[**generateWallet()**](#generatewallet) | Generate wallet
[**generateAddressFromXpub()**](#generateaddressfromxpub) | Generate address from xPub and index
[**generateAddressFromPrivateKey()**](#generateaddressfromprivatekey) | Generate address from xPub and index
[**generatePrivateKey()**](#generateprivatekey) | Generate private key from mnemonic and index

# `generateWallet()`

## Example

[👉 View "**generateWallet.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Local/Wallet/Ethereum/generateWallet.php)

## Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->local()->wallet()->ethereum()->generateWallet(
    [ string $mnemonic = null ]
): \Tatum\Model\Wallet
```

## Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$mnemonic** | `string` | 24-word mnemonic |  [optional] [default to null]

## Return type

Wallet Model ([**\Tatum\Model\Wallet**](../../../Model/Wallet))

## Description

Generate wallet

[Back to top](#top)


# `generateAddressFromXpub()`

## Example

[👉 View "**generateAddressFromXpub.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Local/Wallet/Ethereum/generateAddressFromXpub.php)

## Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->local()->wallet()->ethereum()->generateAddressFromXpub(
    string $xpub,
    int $index
): \Tatum\Model\GeneratedAddressBtc
```

## Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$xpub** | `string` | Extended public key | 
**$index** | `int` | Derivation index | 

## Return type

Address Model ([**\Tatum\Model\GeneratedAddressBtc**](../../../Model/GeneratedAddressBtc))

## Description

Generate address from xPub and index

[Back to top](#top)


# `generateAddressFromPrivateKey()`

## Example

[👉 View "**generateAddressFromPrivateKey.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Local/Wallet/Ethereum/generateAddressFromPrivateKey.php)

## Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->local()->wallet()->ethereum()->generateAddressFromPrivateKey(
    \Tatum\Model\PrivKey $privateKey
): \Tatum\Model\GeneratedAddressBtc
```

## Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$privateKey** | [**\Tatum\Model\PrivKey**](../../../Model/PrivKey) | Private Key | 

## Return type

Address Model ([**\Tatum\Model\GeneratedAddressBtc**](../../../Model/GeneratedAddressBtc))

## Description

Generate address from xPub and index

[Back to top](#top)


# `generatePrivateKey()`

## Example

[👉 View "**generatePrivateKey.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Local/Wallet/Ethereum/generatePrivateKey.php)

## Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->local()->wallet()->ethereum()->generatePrivateKey(
    string $mnemonic,
    int $index
): \Tatum\Model\PrivKey
```

## Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$mnemonic** | `string` | 24-word mnemonic | 
**$index** | `int` | Derivation index | 

## Return type

Private Key ([**\Tatum\Model\PrivKey**](../../../Model/PrivKey))

## Description

Generate private key from mnemonic and index

[Back to top](#top)

