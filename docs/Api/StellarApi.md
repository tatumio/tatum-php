# Tatum/Api/StellarApi

* Stellar [documentation](https://apidoc.tatum.io/tag/Stellar/)
* HTTP requests are relative to https://api.tatum.io

Method | HTTP request | Description
------------- | ------------- | -------------
[**transfer Xlm Blockchain()**](#transferxlmblockchain) | **POST** `/v3 /xlm /transaction` | Send XLM from address to address
[**transfer Xlm Blockchain Asset()**](#transferxlmblockchainasset) | **POST** `/v3 /xlm /transaction` | Send XLM from address to address
[**transfer Xlm Blockchain KMS()**](#transferxlmblockchainkms) | **POST** `/v3 /xlm /transaction` | Send XLM from address to address
[**transfer Xlm Blockchain KMSAsset()**](#transferxlmblockchainkmsasset) | **POST** `/v3 /xlm /transaction` | Send XLM from address to address
[**trust Line Xlm Blockchain()**](#trustlinexlmblockchain) | **POST** `/v3 /xlm /trust` | Create / Update / Delete XLM trust line
[**trust Line Xlm Blockchain KMS()**](#trustlinexlmblockchainkms) | **POST** `/v3 /xlm /trust` | Create / Update / Delete XLM trust line
[**xlm Broadcast()**](#xlmbroadcast) | **POST** `/v3 /xlm /broadcast` | Broadcast signed XLM transaction
[**xlm Get Account Info()**](#xlmgetaccountinfo) | **GET** `/v3 /xlm /account /{account}` | Get XLM Account info
[**xlm Get Account Tx()**](#xlmgetaccounttx) | **GET** `/v3 /xlm /account /tx /{account}` | Get XLM Account transactions
[**xlm Get Fee()**](#xlmgetfee) | **GET** `/v3 /xlm /fee` | Get actual XLM fee
[**xlm Get Last Closed Ledger()**](#xlmgetlastclosedledger) | **GET** `/v3 /xlm /info` | Get XLM Blockchain Information
[**xlm Get Ledger()**](#xlmgetledger) | **GET** `/v3 /xlm /ledger /{sequence}` | Get XLM Blockchain Ledger by sequence
[**xlm Get Ledger Tx()**](#xlmgetledgertx) | **GET** `/v3 /xlm /ledger /{sequence} /transaction` | Get XLM Blockchain Transactions in Ledger
[**xlm Get Transaction()**](#xlmgettransaction) | **GET** `/v3 /xlm /transaction /{hash}` | Get XLM Transaction by hash
[**xlm Wallet()**](#xlmwallet) | **GET** `/v3 /xlm /account` | Generate XLM account


## `transferXlmBlockchain()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->stellar()->transferXlmBlockchain(
    \Tatum\Model\TransferXlmBlockchain $transfer_xlm_blockchain
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_xlm_blockchain** | [**\Tatum\Model\TransferXlmBlockchain**](../Model/TransferXlmBlockchain.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Send XLM from address to address

<h4>10 credits per API call.</h4><br/> <p>Send XLM from account to account. It is possbile to send native XLM asset, or any other custom asset present on the network.<br/><br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and loss of funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

[✨ View "transferXlmBlockchain.php"](../../examples/Api/StellarApi/transferXlmBlockchain.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferXlmBlockchainAsset()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->stellar()->transferXlmBlockchainAsset(
    \Tatum\Model\TransferXlmBlockchainAsset $transfer_xlm_blockchain_asset
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_xlm_blockchain_asset** | [**\Tatum\Model\TransferXlmBlockchainAsset**](../Model/TransferXlmBlockchainAsset.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Send XLM from address to address

TransferXlmBlockchainAsset operation

### Example

[✨ View "transferXlmBlockchainAsset.php"](../../examples/Api/StellarApi/transferXlmBlockchainAsset.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferXlmBlockchainKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->stellar()->transferXlmBlockchainKMS(
    \Tatum\Model\TransferXlmBlockchainKMS $transfer_xlm_blockchain_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_xlm_blockchain_kms** | [**\Tatum\Model\TransferXlmBlockchainKMS**](../Model/TransferXlmBlockchainKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Send XLM from address to address

TransferXlmBlockchainKMS operation

### Example

[✨ View "transferXlmBlockchainKMS.php"](../../examples/Api/StellarApi/transferXlmBlockchainKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferXlmBlockchainKMSAsset()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->stellar()->transferXlmBlockchainKMSAsset(
    \Tatum\Model\TransferXlmBlockchainKMSAsset $transfer_xlm_blockchain_kms_asset
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_xlm_blockchain_kms_asset** | [**\Tatum\Model\TransferXlmBlockchainKMSAsset**](../Model/TransferXlmBlockchainKMSAsset.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Send XLM from address to address

TransferXlmBlockchainKMSAsset operation

### Example

[✨ View "transferXlmBlockchainKMSAsset.php"](../../examples/Api/StellarApi/transferXlmBlockchainKMSAsset.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `trustLineXlmBlockchain()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->stellar()->trustLineXlmBlockchain(
    \Tatum\Model\TrustLineXlmBlockchain $trust_line_xlm_blockchain
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$trust_line_xlm_blockchain** | [**\Tatum\Model\TrustLineXlmBlockchain**](../Model/TrustLineXlmBlockchain.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Create / Update / Delete XLM trust line

<h4>10 credits per API call.</h4><br/><p> <p>Create / Update / Delete XLM trust line between accounts to transfer private assets. By creating trustline for the first time, the asset is created automatically and can be used in the transactions.<br/><br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and loss of funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

[✨ View "trustLineXlmBlockchain.php"](../../examples/Api/StellarApi/trustLineXlmBlockchain.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `trustLineXlmBlockchainKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->stellar()->trustLineXlmBlockchainKMS(
    \Tatum\Model\TrustLineXlmBlockchainKMS $trust_line_xlm_blockchain_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$trust_line_xlm_blockchain_kms** | [**\Tatum\Model\TrustLineXlmBlockchainKMS**](../Model/TrustLineXlmBlockchainKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Create / Update / Delete XLM trust line

TrustLineXlmBlockchainKMS operation

### Example

[✨ View "trustLineXlmBlockchainKMS.php"](../../examples/Api/StellarApi/trustLineXlmBlockchainKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

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
