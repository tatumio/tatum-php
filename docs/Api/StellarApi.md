# Tatum/Api/StellarApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**xlmBroadcast()**](#xlmbroadcast) | **POST** [/v3/xlm/broadcast](https://apidoc.tatum.io/tag/Stellar#operation/XlmBroadcast) | Broadcast signed XLM transaction
[**xlmGetAccountInfo()**](#xlmgetaccountinfo) | **GET** [/v3/xlm/account/{account}](https://apidoc.tatum.io/tag/Stellar#operation/XlmGetAccountInfo) | Get XLM Account info
[**xlmGetAccountTx()**](#xlmgetaccounttx) | **GET** [/v3/xlm/account/tx/{account}](https://apidoc.tatum.io/tag/Stellar#operation/XlmGetAccountTx) | Get XLM Account transactions
[**xlmGetFee()**](#xlmgetfee) | **GET** [/v3/xlm/fee](https://apidoc.tatum.io/tag/Stellar#operation/XlmGetFee) | Get actual XLM fee
[**xlmGetLastClosedLedger()**](#xlmgetlastclosedledger) | **GET** [/v3/xlm/info](https://apidoc.tatum.io/tag/Stellar#operation/XlmGetLastClosedLedger) | Get XLM Blockchain Information
[**xlmGetLedger()**](#xlmgetledger) | **GET** [/v3/xlm/ledger/{sequence}](https://apidoc.tatum.io/tag/Stellar#operation/XlmGetLedger) | Get XLM Blockchain Ledger by sequence
[**xlmGetLedgerTx()**](#xlmgetledgertx) | **GET** [/v3/xlm/ledger/{sequence}/transaction](https://apidoc.tatum.io/tag/Stellar#operation/XlmGetLedgerTx) | Get XLM Blockchain Transactions in Ledger
[**xlmGetTransaction()**](#xlmgettransaction) | **GET** [/v3/xlm/transaction/{hash}](https://apidoc.tatum.io/tag/Stellar#operation/XlmGetTransaction) | Get XLM Transaction by hash
[**xlmTransactionTransferXlmBlockchain()**](#xlmtransactiontransferxlmblockchain) | **POST** [/v3/xlm/transaction#postTransferXlmBlockchain](https://apidoc.tatum.io/tag/Stellar#operation/xlmTransactionTransferXlmBlockchain) | Send XLM from address to address
[**xlmTransactionTransferXlmBlockchainAsset()**](#xlmtransactiontransferxlmblockchainasset) | **POST** [/v3/xlm/transaction#postTransferXlmBlockchainAsset](https://apidoc.tatum.io/tag/Stellar#operation/xlmTransactionTransferXlmBlockchainAsset) | Send XLM from address to address
[**xlmTransactionTransferXlmBlockchainKMS()**](#xlmtransactiontransferxlmblockchainkms) | **POST** [/v3/xlm/transaction#postTransferXlmBlockchainKMS](https://apidoc.tatum.io/tag/Stellar#operation/xlmTransactionTransferXlmBlockchainKMS) | Send XLM from address to address
[**xlmTransactionTransferXlmBlockchainKMSAsset()**](#xlmtransactiontransferxlmblockchainkmsasset) | **POST** [/v3/xlm/transaction#postTransferXlmBlockchainKMSAsset](https://apidoc.tatum.io/tag/Stellar#operation/xlmTransactionTransferXlmBlockchainKMSAsset) | Send XLM from address to address
[**xlmTrustLineXlmBlockchain()**](#xlmtrustlinexlmblockchain) | **POST** [/v3/xlm/trust#postTrustLineXlmBlockchain](https://apidoc.tatum.io/tag/Stellar#operation/xlmTrustLineXlmBlockchain) | Create / Update / Delete XLM trust line
[**xlmTrustLineXlmBlockchainKMS()**](#xlmtrustlinexlmblockchainkms) | **POST** [/v3/xlm/trust#postTrustLineXlmBlockchainKMS](https://apidoc.tatum.io/tag/Stellar#operation/xlmTrustLineXlmBlockchainKMS) | Create / Update / Delete XLM trust line
[**xlmWallet()**](#xlmwallet) | **GET** [/v3/xlm/account](https://apidoc.tatum.io/tag/Stellar#operation/XlmWallet) | Generate XLM account


## `xlmBroadcast()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->stellar()->xlmBroadcast(
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

Broadcast signed XLM transaction

<h4>5 credits per API call.</h4><br/> <p>Broadcast signed transaction to XLM blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.</p>

### Example

[✨ View "xlmBroadcast.php"](../../examples/Api/StellarApi/xlmBroadcast.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xlmGetAccountInfo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->stellar()->xlmGetAccountInfo(
    string $account
): \Tatum\Model\XlmAccount
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$account** | **string**  | Account address you want to get balance of |

### Return type

[**\Tatum\Model\XlmAccount**](../Model/XlmAccount.md)

### Description

Get XLM Account info

<h4>5 credits per API call.</h4><br/><p>Get XLM Account detail.</p>

### Example

[✨ View "xlmGetAccountInfo.php"](../../examples/Api/StellarApi/xlmGetAccountInfo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xlmGetAccountTx()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->stellar()->xlmGetAccountTx(
    string $account,
    [ string $pagination ]
): \Tatum\Model\XlmTx[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$account** | **string**  | Address of XLM account. |
 **$pagination** | **string**  | Paging token from the last transaction gives you next page | [optional]

### Return type

[**\Tatum\Model\XlmTx[]**](../Model/XlmTx.md)

### Description

Get XLM Account transactions

<h4>5 credits per API call.</h4><br/><p>List all XLM account transactions.</p>

### Example

[✨ View "xlmGetAccountTx.php"](../../examples/Api/StellarApi/xlmGetAccountTx.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xlmGetFee()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->stellar()->xlmGetFee(
): float
```

### Parameters

This endpoint does not need any parameter.

### Return type

**float**

### Description

Get actual XLM fee

<h4>5 credits per API call.</h4><br/><p>Get XLM Blockchain fee in 1/10000000 of XLM (stroop)</p>

### Example

[✨ View "xlmGetFee.php"](../../examples/Api/StellarApi/xlmGetFee.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xlmGetLastClosedLedger()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->stellar()->xlmGetLastClosedLedger(
): \Tatum\Model\XlmLedger
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\XlmLedger**](../Model/XlmLedger.md)

### Description

Get XLM Blockchain Information

<h4>5 credits per API call.</h4><br/><p>Get XLM Blockchain last closed ledger.</p>

### Example

[✨ View "xlmGetLastClosedLedger.php"](../../examples/Api/StellarApi/xlmGetLastClosedLedger.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xlmGetLedger()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->stellar()->xlmGetLedger(
    string $sequence
): \Tatum\Model\XlmLedger
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$sequence** | **string**  | Sequence of the ledger. |

### Return type

[**\Tatum\Model\XlmLedger**](../Model/XlmLedger.md)

### Description

Get XLM Blockchain Ledger by sequence

<h4>5 credits per API call.</h4><br/><p>Get XLM Blockchain ledger for ledger sequence.</p>

### Example

[✨ View "xlmGetLedger.php"](../../examples/Api/StellarApi/xlmGetLedger.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xlmGetLedgerTx()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->stellar()->xlmGetLedgerTx(
    string $sequence
): \Tatum\Model\XlmTx[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$sequence** | **string**  | Sequence of the ledger. |

### Return type

[**\Tatum\Model\XlmTx[]**](../Model/XlmTx.md)

### Description

Get XLM Blockchain Transactions in Ledger

<h4>5 credits per API call.</h4><br/><p>Get XLM Blockchain transactions in the ledger.</p>

### Example

[✨ View "xlmGetLedgerTx.php"](../../examples/Api/StellarApi/xlmGetLedgerTx.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xlmGetTransaction()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->stellar()->xlmGetTransaction(
    string $hash
): \Tatum\Model\XlmTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Transaction hash |

### Return type

[**\Tatum\Model\XlmTx**](../Model/XlmTx.md)

### Description

Get XLM Transaction by hash

<h4>5 credits per API call.</h4><br/><p>Get XLM Transaction by transaction hash.</p>

### Example

[✨ View "xlmGetTransaction.php"](../../examples/Api/StellarApi/xlmGetTransaction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xlmTransactionTransferXlmBlockchain()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->stellar()->xlmTransactionTransferXlmBlockchain(
    \Tatum\Model\TransferXlmBlockchain $transfer_xlm_blockchain
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_xlm_blockchain** | [**\Tatum\Model\TransferXlmBlockchain**](../Model/TransferXlmBlockchain.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Send XLM from address to address

<h4>10 credits per API call.</h4><br/> <p>Send XLM from account to account. It is possbile to send native XLM asset, or any other custom asset present on the network.<br/><br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and loss of funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

[✨ View "xlmTransactionTransferXlmBlockchain.php"](../../examples/Api/StellarApi/xlmTransactionTransferXlmBlockchain.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xlmTransactionTransferXlmBlockchainAsset()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->stellar()->xlmTransactionTransferXlmBlockchainAsset(
    \Tatum\Model\TransferXlmBlockchainAsset $transfer_xlm_blockchain_asset
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_xlm_blockchain_asset** | [**\Tatum\Model\TransferXlmBlockchainAsset**](../Model/TransferXlmBlockchainAsset.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Send XLM from address to address

TransferXlmBlockchainAsset operation

### Example

[✨ View "xlmTransactionTransferXlmBlockchainAsset.php"](../../examples/Api/StellarApi/xlmTransactionTransferXlmBlockchainAsset.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xlmTransactionTransferXlmBlockchainKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->stellar()->xlmTransactionTransferXlmBlockchainKMS(
    \Tatum\Model\TransferXlmBlockchainKMS $transfer_xlm_blockchain_kms
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_xlm_blockchain_kms** | [**\Tatum\Model\TransferXlmBlockchainKMS**](../Model/TransferXlmBlockchainKMS.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Send XLM from address to address

TransferXlmBlockchainKMS operation

### Example

[✨ View "xlmTransactionTransferXlmBlockchainKMS.php"](../../examples/Api/StellarApi/xlmTransactionTransferXlmBlockchainKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xlmTransactionTransferXlmBlockchainKMSAsset()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->stellar()->xlmTransactionTransferXlmBlockchainKMSAsset(
    \Tatum\Model\TransferXlmBlockchainKMSAsset $transfer_xlm_blockchain_kms_asset
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_xlm_blockchain_kms_asset** | [**\Tatum\Model\TransferXlmBlockchainKMSAsset**](../Model/TransferXlmBlockchainKMSAsset.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Send XLM from address to address

TransferXlmBlockchainKMSAsset operation

### Example

[✨ View "xlmTransactionTransferXlmBlockchainKMSAsset.php"](../../examples/Api/StellarApi/xlmTransactionTransferXlmBlockchainKMSAsset.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xlmTrustLineXlmBlockchain()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->stellar()->xlmTrustLineXlmBlockchain(
    \Tatum\Model\TrustLineXlmBlockchain $trust_line_xlm_blockchain
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$trust_line_xlm_blockchain** | [**\Tatum\Model\TrustLineXlmBlockchain**](../Model/TrustLineXlmBlockchain.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Create / Update / Delete XLM trust line

<h4>10 credits per API call.</h4><br/><p> <p>Create / Update / Delete XLM trust line between accounts to transfer private assets. By creating trustline for the first time, the asset is created automatically and can be used in the transactions.<br/><br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and loss of funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

[✨ View "xlmTrustLineXlmBlockchain.php"](../../examples/Api/StellarApi/xlmTrustLineXlmBlockchain.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xlmTrustLineXlmBlockchainKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->stellar()->xlmTrustLineXlmBlockchainKMS(
    \Tatum\Model\TrustLineXlmBlockchainKMS $trust_line_xlm_blockchain_kms
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$trust_line_xlm_blockchain_kms** | [**\Tatum\Model\TrustLineXlmBlockchainKMS**](../Model/TrustLineXlmBlockchainKMS.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Create / Update / Delete XLM trust line

TrustLineXlmBlockchainKMS operation

### Example

[✨ View "xlmTrustLineXlmBlockchainKMS.php"](../../examples/Api/StellarApi/xlmTrustLineXlmBlockchainKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xlmWallet()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->stellar()->xlmWallet(
): \Tatum\Model\XlmWallet
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\XlmWallet**](../Model/XlmWallet.md)

### Description

Generate XLM account

<h4>5 credits per API call.</h4><br/> <p>Generate XLM account. Tatum does not support HD wallet for XLM, only specific address and private key can be generated.</p>

### Example

[✨ View "xlmWallet.php"](../../examples/Api/StellarApi/xlmWallet.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
