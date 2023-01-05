# Tatum/Api/XRPApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**xrpAccountSettingsAccountSettingsXrpBlockchain()**](#xrpaccountsettingsaccountsettingsxrpblockchain) | **POST** [/v3/xrp/account/settings](https://apidoc.tatum.io/tag/XRP/#operation/xrpAccountSettingsAccountSettingsXrpBlockchain) | Modify XRP account
[**xrpAccountSettingsAccountSettingsXrpBlockchainKMS()**](#xrpaccountsettingsaccountsettingsxrpblockchainkms) | **POST** [/v3/xrp/account/settings](https://apidoc.tatum.io/tag/XRP/#operation/xrpAccountSettingsAccountSettingsXrpBlockchainKMS) | Modify XRP account
[**xrpBroadcast()**](#xrpbroadcast) | **POST** [/v3/xrp/broadcast](https://apidoc.tatum.io/tag/XRP/#operation/XrpBroadcast) | Broadcast signed XRP transaction
[**xrpGetAccountBalance()**](#xrpgetaccountbalance) | **GET** [/v3/xrp/account/{account}/balance](https://apidoc.tatum.io/tag/XRP/#operation/XrpGetAccountBalance) | Get Account Balance
[**xrpGetAccountInfo()**](#xrpgetaccountinfo) | **GET** [/v3/xrp/account/{account}](https://apidoc.tatum.io/tag/XRP/#operation/XrpGetAccountInfo) | Get Account info
[**xrpGetAccountTx()**](#xrpgetaccounttx) | **GET** [/v3/xrp/account/tx/{account}](https://apidoc.tatum.io/tag/XRP/#operation/XrpGetAccountTx) | Get Account transactions
[**xrpGetFee()**](#xrpgetfee) | **GET** [/v3/xrp/fee](https://apidoc.tatum.io/tag/XRP/#operation/XrpGetFee) | Get actual Blockchain fee
[**xrpGetLastClosedLedger()**](#xrpgetlastclosedledger) | **GET** [/v3/xrp/info](https://apidoc.tatum.io/tag/XRP/#operation/XrpGetLastClosedLedger) | Get XRP Blockchain Information
[**xrpGetLedger()**](#xrpgetledger) | **GET** [/v3/xrp/ledger/{i}](https://apidoc.tatum.io/tag/XRP/#operation/XrpGetLedger) | Get Ledger
[**xrpGetTransaction()**](#xrpgettransaction) | **GET** [/v3/xrp/transaction/{hash}](https://apidoc.tatum.io/tag/XRP/#operation/XrpGetTransaction) | Get XRP Transaction by hash
[**xrpTransactionTransferXrpBlockchain()**](#xrptransactiontransferxrpblockchain) | **POST** [/v3/xrp/transaction](https://apidoc.tatum.io/tag/XRP/#operation/xrpTransactionTransferXrpBlockchain) | Send XRP from address to address
[**xrpTransactionTransferXrpBlockchainAsset()**](#xrptransactiontransferxrpblockchainasset) | **POST** [/v3/xrp/transaction](https://apidoc.tatum.io/tag/XRP/#operation/xrpTransactionTransferXrpBlockchainAsset) | Send XRP from address to address
[**xrpTransactionTransferXrpBlockchainAssetKMS()**](#xrptransactiontransferxrpblockchainassetkms) | **POST** [/v3/xrp/transaction](https://apidoc.tatum.io/tag/XRP/#operation/xrpTransactionTransferXrpBlockchainAssetKMS) | Send XRP from address to address
[**xrpTransactionTransferXrpBlockchainKMS()**](#xrptransactiontransferxrpblockchainkms) | **POST** [/v3/xrp/transaction](https://apidoc.tatum.io/tag/XRP/#operation/xrpTransactionTransferXrpBlockchainKMS) | Send XRP from address to address
[**xrpTrustLineXrpBlockchain()**](#xrptrustlinexrpblockchain) | **POST** [/v3/xrp/trust](https://apidoc.tatum.io/tag/XRP/#operation/xrpTrustLineXrpBlockchain) | Create / Update / Delete XRP trust line
[**xrpTrustLineXrpBlockchainKMS()**](#xrptrustlinexrpblockchainkms) | **POST** [/v3/xrp/trust](https://apidoc.tatum.io/tag/XRP/#operation/xrpTrustLineXrpBlockchainKMS) | Create / Update / Delete XRP trust line
[**xrpWallet()**](#xrpwallet) | **GET** [/v3/xrp/account](https://apidoc.tatum.io/tag/XRP/#operation/XrpWallet) | Generate XRP account


## `xrpAccountSettingsAccountSettingsXrpBlockchain()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xRP()->xrpAccountSettingsAccountSettingsXrpBlockchain(
    \Tatum\Model\AccountSettingsXrpBlockchain $account_settings_xrp_blockchain
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$account_settings_xrp_blockchain** | [**\Tatum\Model\AccountSettingsXrpBlockchain**](../Model/AccountSettingsXrpBlockchain.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Modify XRP account

<h4>10 credits per API call.</h4><br/><p> <p>Modify XRP account settings. If an XRP account should be an issuer of the custom asset, this accounts should have rippling enabled to true. In order to support off-chain processing, required destination tag should be set on the account.<br/><br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and loss of funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

[✨ View "xrpAccountSettingsAccountSettingsXrpBlockchain.php"](../../examples/Api/XRPApi/xrpAccountSettingsAccountSettingsXrpBlockchain.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xrpAccountSettingsAccountSettingsXrpBlockchainKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xRP()->xrpAccountSettingsAccountSettingsXrpBlockchainKMS(
    \Tatum\Model\AccountSettingsXrpBlockchainKMS $account_settings_xrp_blockchain_kms
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$account_settings_xrp_blockchain_kms** | [**\Tatum\Model\AccountSettingsXrpBlockchainKMS**](../Model/AccountSettingsXrpBlockchainKMS.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Modify XRP account

AccountSettingsXrpBlockchainKMS operation

### Example

[✨ View "xrpAccountSettingsAccountSettingsXrpBlockchainKMS.php"](../../examples/Api/XRPApi/xrpAccountSettingsAccountSettingsXrpBlockchainKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xrpBroadcast()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xRP()->xrpBroadcast(
    \Tatum\Model\BroadcastKMS $broadcast_kms
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$broadcast_kms** | [**\Tatum\Model\BroadcastKMS**](../Model/BroadcastKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

### Description

Broadcast signed XRP transaction

<h4>5 credits per API call.</h4><br/> <p>Broadcast signed transaction to XRP blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.</p>

### Example

[✨ View "xrpBroadcast.php"](../../examples/Api/XRPApi/xrpBroadcast.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xrpGetAccountBalance()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xRP()->xrpGetAccountBalance(
    string $account
): \Tatum\Model\XrpAccountBalance
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$account** | **string**  | Account address you want to get balance of |

### Return type

[**\Tatum\Model\XrpAccountBalance**](../Model/XrpAccountBalance.md)

### Description

Get Account Balance

<h4>5 credits per API call.</h4><br/><p>Get XRP Account Balance. Obtain balance of the XRP and other assets on the account.</p>

### Example

[✨ View "xrpGetAccountBalance.php"](../../examples/Api/XRPApi/xrpGetAccountBalance.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xrpGetAccountInfo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xRP()->xrpGetAccountInfo(
    string $account
): \Tatum\Model\XrpAccount
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$account** | **string**  | Account address you want to get balance of |

### Return type

[**\Tatum\Model\XrpAccount**](../Model/XrpAccount.md)

### Description

Get Account info

<h4>5 credits per API call.</h4><br/><p>Get XRP Account info.</p>

### Example

[✨ View "xrpGetAccountInfo.php"](../../examples/Api/XRPApi/xrpGetAccountInfo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xrpGetAccountTx()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xRP()->xrpGetAccountTx(
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

[**\Tatum\Model\XrpAccountTx**](../Model/XrpAccountTx.md)

### Description

Get Account transactions

<h4>5 credits per API call.</h4><br/><p>List all Account transactions.</p>

### Example

[✨ View "xrpGetAccountTx.php"](../../examples/Api/XRPApi/xrpGetAccountTx.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xrpGetFee()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xRP()->xrpGetFee(
): \Tatum\Model\XrpFee
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\XrpFee**](../Model/XrpFee.md)

### Description

Get actual Blockchain fee

<h4>5 credits per API call.</h4><br/> <p>Get XRP Blockchain fee. Standard fee for the transaction is available in the drops.base_fee section and is 10 XRP drops by default. When there is a heavy traffic on the blockchain, fees are increasing according to current traffic.</p>

### Example

[✨ View "xrpGetFee.php"](../../examples/Api/XRPApi/xrpGetFee.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xrpGetLastClosedLedger()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xRP()->xrpGetLastClosedLedger(
): \Tatum\Model\XrpInfo
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\XrpInfo**](../Model/XrpInfo.md)

### Description

Get XRP Blockchain Information

<h4>5 credits per API call.</h4><br/><p>Get XRP Blockchain last closed ledger index and hash.</p>

### Example

[✨ View "xrpGetLastClosedLedger.php"](../../examples/Api/XRPApi/xrpGetLastClosedLedger.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xrpGetLedger()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xRP()->xrpGetLedger(
    float $i
): \Tatum\Model\XrpLedger
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$i** | **float**  | Sequence of XRP ledger. |

### Return type

[**\Tatum\Model\XrpLedger**](../Model/XrpLedger.md)

### Description

Get Ledger

<h4>5 credits per API call.</h4><br/><p>Get ledger by sequence.</p>

### Example

[✨ View "xrpGetLedger.php"](../../examples/Api/XRPApi/xrpGetLedger.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xrpGetTransaction()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xRP()->xrpGetTransaction(
    string $hash
): \Tatum\Model\XrpTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Transaction hash |

### Return type

[**\Tatum\Model\XrpTx**](../Model/XrpTx.md)

### Description

Get XRP Transaction by hash

<h4>5 credits per API call.</h4><br/><p>Get XRP Transaction by transaction hash.</p>

### Example

[✨ View "xrpGetTransaction.php"](../../examples/Api/XRPApi/xrpGetTransaction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xrpTransactionTransferXrpBlockchain()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xRP()->xrpTransactionTransferXrpBlockchain(
    \Tatum\Model\TransferXrpBlockchain $transfer_xrp_blockchain
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_xrp_blockchain** | [**\Tatum\Model\TransferXrpBlockchain**](../Model/TransferXrpBlockchain.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Send XRP from address to address

<h4>10 credits per API call.</h4><br/> <p>Send XRP from account to account.<br/><br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and loss of funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

[✨ View "xrpTransactionTransferXrpBlockchain.php"](../../examples/Api/XRPApi/xrpTransactionTransferXrpBlockchain.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xrpTransactionTransferXrpBlockchainAsset()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xRP()->xrpTransactionTransferXrpBlockchainAsset(
    \Tatum\Model\TransferXrpBlockchainAsset $transfer_xrp_blockchain_asset
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_xrp_blockchain_asset** | [**\Tatum\Model\TransferXrpBlockchainAsset**](../Model/TransferXrpBlockchainAsset.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Send XRP from address to address

TransferXrpBlockchainAsset operation

### Example

[✨ View "xrpTransactionTransferXrpBlockchainAsset.php"](../../examples/Api/XRPApi/xrpTransactionTransferXrpBlockchainAsset.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xrpTransactionTransferXrpBlockchainAssetKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xRP()->xrpTransactionTransferXrpBlockchainAssetKMS(
    \Tatum\Model\TransferXrpBlockchainAssetKMS $transfer_xrp_blockchain_asset_kms
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_xrp_blockchain_asset_kms** | [**\Tatum\Model\TransferXrpBlockchainAssetKMS**](../Model/TransferXrpBlockchainAssetKMS.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Send XRP from address to address

TransferXrpBlockchainAssetKMS operation

### Example

[✨ View "xrpTransactionTransferXrpBlockchainAssetKMS.php"](../../examples/Api/XRPApi/xrpTransactionTransferXrpBlockchainAssetKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xrpTransactionTransferXrpBlockchainKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xRP()->xrpTransactionTransferXrpBlockchainKMS(
    \Tatum\Model\TransferXrpBlockchainKMS $transfer_xrp_blockchain_kms
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_xrp_blockchain_kms** | [**\Tatum\Model\TransferXrpBlockchainKMS**](../Model/TransferXrpBlockchainKMS.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Send XRP from address to address

TransferXrpBlockchainKMS operation

### Example

[✨ View "xrpTransactionTransferXrpBlockchainKMS.php"](../../examples/Api/XRPApi/xrpTransactionTransferXrpBlockchainKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xrpTrustLineXrpBlockchain()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xRP()->xrpTrustLineXrpBlockchain(
    \Tatum\Model\TrustLineXrpBlockchain $trust_line_xrp_blockchain
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$trust_line_xrp_blockchain** | [**\Tatum\Model\TrustLineXrpBlockchain**](../Model/TrustLineXrpBlockchain.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Create / Update / Delete XRP trust line

<h4>10 credits per API call.</h4><br/><p> <p>Create / Update / Delete XRP trust line between accounts to transfer private assets. By creating trustline for the first time, the asset is created automatically and can be used in the transactions.<br/> Account setting rippling must be enabled on the issuer account before the trust line creation to asset work correctly. Creating a trust line will cause an additional 5 XRP to be blocked on the account.<br/><br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and loss of funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.</p>

### Example

[✨ View "xrpTrustLineXrpBlockchain.php"](../../examples/Api/XRPApi/xrpTrustLineXrpBlockchain.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xrpTrustLineXrpBlockchainKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xRP()->xrpTrustLineXrpBlockchainKMS(
    \Tatum\Model\TrustLineXrpBlockchainKMS $trust_line_xrp_blockchain_kms
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$trust_line_xrp_blockchain_kms** | [**\Tatum\Model\TrustLineXrpBlockchainKMS**](../Model/TrustLineXrpBlockchainKMS.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Create / Update / Delete XRP trust line

TrustLineXrpBlockchainKMS operation

### Example

[✨ View "xrpTrustLineXrpBlockchainKMS.php"](../../examples/Api/XRPApi/xrpTrustLineXrpBlockchainKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xrpWallet()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xRP()->xrpWallet(
): \Tatum\Model\XrpWallet
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\XrpWallet**](../Model/XrpWallet.md)

### Description

Generate XRP account

<h4>5 credits per API call.</h4><br/> <p>Generate XRP account. Tatum does not support HD wallet for XRP, only specific address and private key can be generated.</p>

### Example

[✨ View "xrpWallet.php"](../../examples/Api/XRPApi/xrpWallet.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
