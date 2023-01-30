---
title: BSC
parent: Local/Wallet
layout: page
---

# Local/Wallet/BSC

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet Local/Wallet/BSC
$sdk->mainnet()->local()->wallet()->bsc();

// TestNet Local/Wallet/BSC
$sdk->testnet()->local()->wallet()->bsc();
```

BSC HD Wallet

Method | Description
------------- | -------------
[**generateWallet()**](#generatewallet) | Generate wallet
[**generateAddressFromXpub()**](#generateaddressfromxpub) | Generate address from xPub and index
[**generateAddressFromPrivateKey()**](#generateaddressfromprivatekey) | Generate address from xPub and index
[**generatePrivateKey()**](#generateprivatekey) | Generate private key from mnemonic and index

# `generateWallet()`

## Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **generateWallet.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Local/Wallet/BSC/generateWallet.php){: .btn .btn-green .mt-4}

## Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->local()->wallet()->bsc()->generateWallet(
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

[Back to top](#top){: .btn .btn-purple }

---


# `generateAddressFromXpub()`

## Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **generateAddressFromXpub.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Local/Wallet/BSC/generateAddressFromXpub.php){: .btn .btn-green .mt-4}

## Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->local()->wallet()->bsc()->generateAddressFromXpub(
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

[Back to top](#top){: .btn .btn-purple }

---


# `generateAddressFromPrivateKey()`

## Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **generateAddressFromPrivateKey.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Local/Wallet/BSC/generateAddressFromPrivateKey.php){: .btn .btn-green .mt-4}

## Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->local()->wallet()->bsc()->generateAddressFromPrivateKey(
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

[Back to top](#top){: .btn .btn-purple }

---


# `generatePrivateKey()`

## Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **generatePrivateKey.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Local/Wallet/BSC/generatePrivateKey.php){: .btn .btn-green .mt-4}

## Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->local()->wallet()->bsc()->generatePrivateKey(
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

[Back to top](#top){: .btn .btn-purple }

---

