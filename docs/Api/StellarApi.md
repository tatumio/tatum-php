# Tatum/Api/StellarApi

## References

[Stellar API documentation](https://apidoc.tatum.io/tag/Stellar/)

## Methods

HTTP requests are relative to https://api.tatum.io

[🔹 **transferXlmBlockchain()**](#transferxlmblockchain) 

> Send XLM from address to address
> 
> **POST** `/v3/xlm/transaction`

[🔹 **transferXlmBlockchainAsset()**](#transferxlmblockchainasset) 

> Send XLM from address to address
> 
> **POST** `/v3/xlm/transaction`

[🔹 **transferXlmBlockchainKMS()**](#transferxlmblockchainkms) 

> Send XLM from address to address
> 
> **POST** `/v3/xlm/transaction`

[🔹 **transferXlmBlockchainKMSAsset()**](#transferxlmblockchainkmsasset) 

> Send XLM from address to address
> 
> **POST** `/v3/xlm/transaction`

[🔹 **trustLineXlmBlockchain()**](#trustlinexlmblockchain) 

> Create / Update / Delete XLM trust line
> 
> **POST** `/v3/xlm/trust`

[🔹 **trustLineXlmBlockchainKMS()**](#trustlinexlmblockchainkms) 

> Create / Update / Delete XLM trust line
> 
> **POST** `/v3/xlm/trust`

[🔹 **xlmBroadcast()**](#xlmbroadcast) 

> Broadcast signed XLM transaction
> 
> **POST** `/v3/xlm/broadcast`

[🔹 **xlmGetAccountInfo()**](#xlmgetaccountinfo) 

> Get XLM Account info
> 
> **GET** `/v3/xlm/account/{account}`

[🔹 **xlmGetAccountTx()**](#xlmgetaccounttx) 

> Get XLM Account transactions
> 
> **GET** `/v3/xlm/account/tx/{account}`

[🔹 **xlmGetFee()**](#xlmgetfee) 

> Get actual XLM fee
> 
> **GET** `/v3/xlm/fee`

[🔹 **xlmGetLastClosedLedger()**](#xlmgetlastclosedledger) 

> Get XLM Blockchain Information
> 
> **GET** `/v3/xlm/info`

[🔹 **xlmGetLedger()**](#xlmgetledger) 

> Get XLM Blockchain Ledger by sequence
> 
> **GET** `/v3/xlm/ledger/{sequence}`

[🔹 **xlmGetLedgerTx()**](#xlmgetledgertx) 

> Get XLM Blockchain Transactions in Ledger
> 
> **GET** `/v3/xlm/ledger/{sequence}/transaction`

[🔹 **xlmGetTransaction()**](#xlmgettransaction) 

> Get XLM Transaction by hash
> 
> **GET** `/v3/xlm/transaction/{hash}`

[🔹 **xlmWallet()**](#xlmwallet) 

> Generate XLM account
> 
> **GET** `/v3/xlm/account`



## `transferXlmBlockchain()`

> **POST** `/v3/xlm/transaction`

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

<h4>10 credits per API call.</h4>

 <p>Send XLM from account to account. It is possbile to send native XLM asset, or any other custom asset present on the network.

 This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and loss of funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>


### Example

[✨ View "transferXlmBlockchain.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/StellarApi/transferXlmBlockchain.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferXlmBlockchainAsset()`

> **POST** `/v3/xlm/transaction`

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

[✨ View "transferXlmBlockchainAsset.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/StellarApi/transferXlmBlockchainAsset.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferXlmBlockchainKMS()`

> **POST** `/v3/xlm/transaction`

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

[✨ View "transferXlmBlockchainKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/StellarApi/transferXlmBlockchainKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferXlmBlockchainKMSAsset()`

> **POST** `/v3/xlm/transaction`

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

[✨ View "transferXlmBlockchainKMSAsset.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/StellarApi/transferXlmBlockchainKMSAsset.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `trustLineXlmBlockchain()`

> **POST** `/v3/xlm/trust`

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

<h4>10 credits per API call.</h4>

<p> <p>Create / Update / Delete XLM trust line between accounts to transfer private assets. By creating trustline for the first time, the asset is created automatically and can be used in the transactions.

 This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and loss of funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>


### Example

[✨ View "trustLineXlmBlockchain.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/StellarApi/trustLineXlmBlockchain.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `trustLineXlmBlockchainKMS()`

> **POST** `/v3/xlm/trust`

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

[✨ View "trustLineXlmBlockchainKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/StellarApi/trustLineXlmBlockchainKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xlmBroadcast()`

> **POST** `/v3/xlm/broadcast`

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

<h4>5 credits per API call.</h4>

 <p>Broadcast signed transaction to XLM blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.</p>


### Example

[✨ View "xlmBroadcast.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/StellarApi/xlmBroadcast.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xlmGetAccountInfo()`

> **GET** `/v3/xlm/account/{account}`

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

<h4>5 credits per API call.</h4>

<p>Get XLM Account detail.</p>


### Example

[✨ View "xlmGetAccountInfo.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/StellarApi/xlmGetAccountInfo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xlmGetAccountTx()`

> **GET** `/v3/xlm/account/tx/{account}`

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

<h4>5 credits per API call.</h4>

<p>List all XLM account transactions.</p>


### Example

[✨ View "xlmGetAccountTx.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/StellarApi/xlmGetAccountTx.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xlmGetFee()`

> **GET** `/v3/xlm/fee`

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

<h4>5 credits per API call.</h4>

<p>Get XLM Blockchain fee in 1/10000000 of XLM (stroop)</p>


### Example

[✨ View "xlmGetFee.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/StellarApi/xlmGetFee.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xlmGetLastClosedLedger()`

> **GET** `/v3/xlm/info`

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

<h4>5 credits per API call.</h4>

<p>Get XLM Blockchain last closed ledger.</p>


### Example

[✨ View "xlmGetLastClosedLedger.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/StellarApi/xlmGetLastClosedLedger.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xlmGetLedger()`

> **GET** `/v3/xlm/ledger/{sequence}`

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

<h4>5 credits per API call.</h4>

<p>Get XLM Blockchain ledger for ledger sequence.</p>


### Example

[✨ View "xlmGetLedger.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/StellarApi/xlmGetLedger.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xlmGetLedgerTx()`

> **GET** `/v3/xlm/ledger/{sequence}/transaction`

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

<h4>5 credits per API call.</h4>

<p>Get XLM Blockchain transactions in the ledger.</p>


### Example

[✨ View "xlmGetLedgerTx.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/StellarApi/xlmGetLedgerTx.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xlmGetTransaction()`

> **GET** `/v3/xlm/transaction/{hash}`

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

<h4>5 credits per API call.</h4>

<p>Get XLM Transaction by transaction hash.</p>


### Example

[✨ View "xlmGetTransaction.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/StellarApi/xlmGetTransaction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xlmWallet()`

> **GET** `/v3/xlm/account`

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

<h4>5 credits per API call.</h4>

 <p>Generate XLM account. Tatum does not support HD wallet for XLM, only specific address and private key can be generated.</p>


### Example

[✨ View "xlmWallet.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/StellarApi/xlmWallet.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
