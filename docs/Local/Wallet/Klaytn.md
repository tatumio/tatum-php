# Tatum/Local/Wallet/Klaytn

Klaytn HD Wallet

Method | Description
------------- | -------------
[**generateWallet()**](#generatewallet) | Generate wallet
[**generateAddressFromXpub()**](#generateaddressfromxpub) | Generate address from xPub and index
[**generateAddressFromPrivateKey()**](#generateaddressfromprivatekey) | Generate address from xPub and index
[**generatePrivateKey()**](#generateprivatekey) | Generate private key from mnemonic and index

## `generateWallet()`

### Type signature

```php
$sdk->{mainnet/testnet}()->local()->wallet()->klaytn()->generateWallet(
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

[✨ View "generateWallet.php"](../../../examples/Local/Wallet/Klaytn/generateWallet.php)

[[Back to top]](#) | [[Back to Local Wallet]](../../index.md#local-wallet)


## `generateAddressFromXpub()`

### Type signature

```php
$sdk->{mainnet/testnet}()->local()->wallet()->klaytn()->generateAddressFromXpub(
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

[✨ View "generateAddressFromXpub.php"](../../../examples/Local/Wallet/Klaytn/generateAddressFromXpub.php)

[[Back to top]](#) | [[Back to Local Wallet]](../../index.md#local-wallet)


## `generateAddressFromPrivateKey()`

### Type signature

```php
$sdk->{mainnet/testnet}()->local()->wallet()->klaytn()->generateAddressFromPrivateKey(
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

[✨ View "generateAddressFromPrivateKey.php"](../../../examples/Local/Wallet/Klaytn/generateAddressFromPrivateKey.php)

[[Back to top]](#) | [[Back to Local Wallet]](../../index.md#local-wallet)


## `generatePrivateKey()`

### Type signature

```php
$sdk->{mainnet/testnet}()->local()->wallet()->klaytn()->generatePrivateKey(
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

[✨ View "generatePrivateKey.php"](../../../examples/Local/Wallet/Klaytn/generatePrivateKey.php)

[[Back to top]](#) | [[Back to Local Wallet]](../../index.md#local-wallet)

