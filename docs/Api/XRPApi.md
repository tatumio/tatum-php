---
title: XRP
parent: API
layout: page
---

# Api/XRPApi

[XRP API Reference](https://apidoc.tatum.io/tag/XRP/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->xRP();

// TestNet API Call
$sdk->testnet()->api()->xRP();
```

## Methods

Method | Description
------------- | -------------
[**accountSettingsXrpBlockchain()**](#accountsettingsxrpblockchain) | Modify XRP account
[**accountSettingsXrpBlockchainKMS()**](#accountsettingsxrpblockchainkms) | Modify XRP account
[**transferXrpBlockchain()**](#transferxrpblockchain) | Send XRP from address to address
[**transferXrpBlockchainAsset()**](#transferxrpblockchainasset) | Send XRP from address to address
[**transferXrpBlockchainAssetKMS()**](#transferxrpblockchainassetkms) | Send XRP from address to address
[**transferXrpBlockchainKMS()**](#transferxrpblockchainkms) | Send XRP from address to address
[**trustLineXrpBlockchain()**](#trustlinexrpblockchain) | Create / Update / Delete XRP trust line
[**trustLineXrpBlockchainKMS()**](#trustlinexrpblockchainkms) | Create / Update / Delete XRP trust line
[**xrpBroadcast()**](#xrpbroadcast) | Broadcast signed XRP transaction
[**xrpGetAccountBalance()**](#xrpgetaccountbalance) | Get Account Balance
[**xrpGetAccountInfo()**](#xrpgetaccountinfo) | Get Account info
[**xrpGetAccountTx()**](#xrpgetaccounttx) | Get Account transactions
[**xrpGetFee()**](#xrpgetfee) | Get actual Blockchain fee
[**xrpGetLastClosedLedger()**](#xrpgetlastclosedledger) | Get XRP Blockchain Information
[**xrpGetLedger()**](#xrpgetledger) | Get Ledger
[**xrpGetTransaction()**](#xrpgettransaction) | Get XRP Transaction by hash
[**xrpWallet()**](#xrpwallet) | Generate XRP account


## `accountSettingsXrpBlockchain()`

### Example

[👉 View "**accountSettingsXrpBlockchain.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XRPApi/accountSettingsXrpBlockchain.php)

### Request

> **POST** `/v3/xrp/account/settings`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->xRP()->accountSettingsXrpBlockchain(
    \Tatum\Model\AccountSettingsXrpBlockchain $account_settings_xrp_blockchain
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$account_settings_xrp_blockchain** | [**\Tatum\Model\AccountSettingsXrpBlockchain**](../../Model/AccountSettingsXrpBlockchain) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Modify XRP account

<h4>10 credits per API call.</h4>

 Modify XRP account settings. If an XRP account should be an issuer of the custom asset, this accounts should have rippling enabled to true. In order to support off-chain processing, required destination tag should be set on the account.

 This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and loss of funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.

[Back to top](#top)



## `accountSettingsXrpBlockchainKMS()`

### Example

[👉 View "**accountSettingsXrpBlockchainKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XRPApi/accountSettingsXrpBlockchainKMS.php)

### Request

> **POST** `/v3/xrp/account/settings`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->xRP()->accountSettingsXrpBlockchainKMS(
    \Tatum\Model\AccountSettingsXrpBlockchainKMS $account_settings_xrp_blockchain_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$account_settings_xrp_blockchain_kms** | [**\Tatum\Model\AccountSettingsXrpBlockchainKMS**](../../Model/AccountSettingsXrpBlockchainKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Modify XRP account

AccountSettingsXrpBlockchainKMS operation

[Back to top](#top)



## `transferXrpBlockchain()`

### Example

[👉 View "**transferXrpBlockchain.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XRPApi/transferXrpBlockchain.php)

### Request

> **POST** `/v3/xrp/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->xRP()->transferXrpBlockchain(
    \Tatum\Model\TransferXrpBlockchain $transfer_xrp_blockchain
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_xrp_blockchain** | [**\Tatum\Model\TransferXrpBlockchain**](../../Model/TransferXrpBlockchain) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Send XRP from address to address

<h4>10 credits per API call.</h4>

 Send XRP from account to account.

 This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and loss of funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.

[Back to top](#top)



## `transferXrpBlockchainAsset()`

### Example

[👉 View "**transferXrpBlockchainAsset.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XRPApi/transferXrpBlockchainAsset.php)

### Request

> **POST** `/v3/xrp/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->xRP()->transferXrpBlockchainAsset(
    \Tatum\Model\TransferXrpBlockchainAsset $transfer_xrp_blockchain_asset
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_xrp_blockchain_asset** | [**\Tatum\Model\TransferXrpBlockchainAsset**](../../Model/TransferXrpBlockchainAsset) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Send XRP from address to address

TransferXrpBlockchainAsset operation

[Back to top](#top)



## `transferXrpBlockchainAssetKMS()`

### Example

[👉 View "**transferXrpBlockchainAssetKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XRPApi/transferXrpBlockchainAssetKMS.php)

### Request

> **POST** `/v3/xrp/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->xRP()->transferXrpBlockchainAssetKMS(
    \Tatum\Model\TransferXrpBlockchainAssetKMS $transfer_xrp_blockchain_asset_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_xrp_blockchain_asset_kms** | [**\Tatum\Model\TransferXrpBlockchainAssetKMS**](../../Model/TransferXrpBlockchainAssetKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Send XRP from address to address

TransferXrpBlockchainAssetKMS operation

[Back to top](#top)



## `transferXrpBlockchainKMS()`

### Example

[👉 View "**transferXrpBlockchainKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XRPApi/transferXrpBlockchainKMS.php)

### Request

> **POST** `/v3/xrp/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->xRP()->transferXrpBlockchainKMS(
    \Tatum\Model\TransferXrpBlockchainKMS $transfer_xrp_blockchain_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_xrp_blockchain_kms** | [**\Tatum\Model\TransferXrpBlockchainKMS**](../../Model/TransferXrpBlockchainKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Send XRP from address to address

TransferXrpBlockchainKMS operation

[Back to top](#top)



## `trustLineXrpBlockchain()`

### Example

[👉 View "**trustLineXrpBlockchain.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XRPApi/trustLineXrpBlockchain.php)

### Request

> **POST** `/v3/xrp/trust`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->xRP()->trustLineXrpBlockchain(
    \Tatum\Model\TrustLineXrpBlockchain $trust_line_xrp_blockchain
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$trust_line_xrp_blockchain** | [**\Tatum\Model\TrustLineXrpBlockchain**](../../Model/TrustLineXrpBlockchain) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Create / Update / Delete XRP trust line

<h4>10 credits per API call.</h4>

 Create / Update / Delete XRP trust line between accounts to transfer private assets. By creating trustline for the first time, the asset is created automatically and can be used in the transactions.

 Account setting rippling must be enabled on the issuer account before the trust line creation to asset work correctly. Creating a trust line will cause an additional 5 XRP to be blocked on the account.

 This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and loss of funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.

[Back to top](#top)



## `trustLineXrpBlockchainKMS()`

### Example

[👉 View "**trustLineXrpBlockchainKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XRPApi/trustLineXrpBlockchainKMS.php)

### Request

> **POST** `/v3/xrp/trust`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->xRP()->trustLineXrpBlockchainKMS(
    \Tatum\Model\TrustLineXrpBlockchainKMS $trust_line_xrp_blockchain_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$trust_line_xrp_blockchain_kms** | [**\Tatum\Model\TrustLineXrpBlockchainKMS**](../../Model/TrustLineXrpBlockchainKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Create / Update / Delete XRP trust line

TrustLineXrpBlockchainKMS operation

[Back to top](#top)



## `xrpBroadcast()`

### Example

[👉 View "**xrpBroadcast.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XRPApi/xrpBroadcast.php)

### Request

> **POST** `/v3/xrp/broadcast`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->xRP()->xrpBroadcast(
    \Tatum\Model\BroadcastKMS $broadcast_kms
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$broadcast_kms** | [**\Tatum\Model\BroadcastKMS**](../../Model/BroadcastKMS) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../../Model/TransactionHash)

### Description

Broadcast signed XRP transaction

<h4>5 credits per API call.</h4>

 Broadcast signed transaction to XRP blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.

[Back to top](#top)



## `xrpGetAccountBalance()`

### Example

[👉 View "**xrpGetAccountBalance.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XRPApi/xrpGetAccountBalance.php)

### Request

> **GET** `/v3/xrp/account/{account}/balance`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->xRP()->xrpGetAccountBalance(
    string $account
): \Tatum\Model\XrpAccountBalance
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$account** | **string**  | Account address you want to get balance of |

### Return type

[**\Tatum\Model\XrpAccountBalance**](../../Model/XrpAccountBalance)

### Description

Get Account Balance

<h4>5 credits per API call.</h4>

Get XRP Account Balance. Obtain balance of the XRP and other assets on the account.

[Back to top](#top)



## `xrpGetAccountInfo()`

### Example

[👉 View "**xrpGetAccountInfo.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XRPApi/xrpGetAccountInfo.php)

### Request

> **GET** `/v3/xrp/account/{account}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->xRP()->xrpGetAccountInfo(
    string $account
): \Tatum\Model\XrpAccount
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$account** | **string**  | Account address you want to get balance of |

### Return type

[**\Tatum\Model\XrpAccount**](../../Model/XrpAccount)

### Description

Get Account info

<h4>5 credits per API call.</h4>

Get XRP Account info.

[Back to top](#top)



## `xrpGetAccountTx()`

### Example

[👉 View "**xrpGetAccountTx.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XRPApi/xrpGetAccountTx.php)

### Request

> **GET** `/v3/xrp/account/tx/{account}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->xRP()->xrpGetAccountTx(
    string $account,
    [ float $min, ]
    [ string $marker ]
): \Tatum\Model\XrpAccountTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$account** | **string**  | Address of XRP account. |
 **$min** | **float**  | Ledger version to start scanning for transactions from. | [optional]
 **$marker** | **string**  | Marker from the last paginated request. It is stringified JSON from previous response. | [optional]

### Return type

[**\Tatum\Model\XrpAccountTx**](../../Model/XrpAccountTx)

### Description

Get Account transactions

<h4>5 credits per API call.</h4>

List all Account transactions.

[Back to top](#top)



## `xrpGetFee()`

### Example

[👉 View "**xrpGetFee.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XRPApi/xrpGetFee.php)

### Request

> **GET** `/v3/xrp/fee`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->xRP()->xrpGetFee(): \Tatum\Model\XrpFee
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\XrpFee**](../../Model/XrpFee)

### Description

Get actual Blockchain fee

<h4>5 credits per API call.</h4>

 Get XRP Blockchain fee. Standard fee for the transaction is available in the drops.base_fee section and is 10 XRP drops by default. When there is a heavy traffic on the blockchain, fees are increasing according to current traffic.

[Back to top](#top)



## `xrpGetLastClosedLedger()`

### Example

[👉 View "**xrpGetLastClosedLedger.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XRPApi/xrpGetLastClosedLedger.php)

### Request

> **GET** `/v3/xrp/info`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->xRP()->xrpGetLastClosedLedger(): \Tatum\Model\XrpInfo
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\XrpInfo**](../../Model/XrpInfo)

### Description

Get XRP Blockchain Information

<h4>5 credits per API call.</h4>

Get XRP Blockchain last closed ledger index and hash.

[Back to top](#top)



## `xrpGetLedger()`

### Example

[👉 View "**xrpGetLedger.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XRPApi/xrpGetLedger.php)

### Request

> **GET** `/v3/xrp/ledger/{i}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->xRP()->xrpGetLedger(
    float $i
): \Tatum\Model\XrpLedger
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$i** | **float**  | Sequence of XRP ledger. |

### Return type

[**\Tatum\Model\XrpLedger**](../../Model/XrpLedger)

### Description

Get Ledger

<h4>5 credits per API call.</h4>

Get ledger by sequence.

[Back to top](#top)



## `xrpGetTransaction()`

### Example

[👉 View "**xrpGetTransaction.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XRPApi/xrpGetTransaction.php)

### Request

> **GET** `/v3/xrp/transaction/{hash}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->xRP()->xrpGetTransaction(
    string $hash
): \Tatum\Model\XrpTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Transaction hash |

### Return type

[**\Tatum\Model\XrpTx**](../../Model/XrpTx)

### Description

Get XRP Transaction by hash

<h4>5 credits per API call.</h4>

Get XRP Transaction by transaction hash.

[Back to top](#top)



## `xrpWallet()`

### Example

[👉 View "**xrpWallet.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XRPApi/xrpWallet.php)

### Request

> **GET** `/v3/xrp/account`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->xRP()->xrpWallet(): \Tatum\Model\XrpWallet
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\XrpWallet**](../../Model/XrpWallet)

### Description

Generate XRP account

<h4>5 credits per API call.</h4>

 Generate XRP account. Tatum does not support HD wallet for XRP, only specific address and private key can be generated.

[Back to top](#top)

