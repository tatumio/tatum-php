---
title: Stellar
parent: API
layout: page
---

# Api/StellarApi

[Stellar API Reference](https://apidoc.tatum.io/tag/Stellar/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->stellar();

// TestNet API Call
$sdk->testnet()->api()->stellar();
```

## Methods

Method | Description
------------- | -------------
[**transferXlmBlockchain()**](#transferxlmblockchain) | Send XLM from address to address
[**transferXlmBlockchainAsset()**](#transferxlmblockchainasset) | Send XLM from address to address
[**transferXlmBlockchainKMS()**](#transferxlmblockchainkms) | Send XLM from address to address
[**transferXlmBlockchainKMSAsset()**](#transferxlmblockchainkmsasset) | Send XLM from address to address
[**trustLineXlmBlockchain()**](#trustlinexlmblockchain) | Create / Update / Delete XLM trust line
[**trustLineXlmBlockchainKMS()**](#trustlinexlmblockchainkms) | Create / Update / Delete XLM trust line
[**xlmBroadcast()**](#xlmbroadcast) | Broadcast signed XLM transaction
[**xlmGetAccountInfo()**](#xlmgetaccountinfo) | Get XLM Account info
[**xlmGetAccountTx()**](#xlmgetaccounttx) | Get XLM Account transactions
[**xlmGetFee()**](#xlmgetfee) | Get actual XLM fee
[**xlmGetLastClosedLedger()**](#xlmgetlastclosedledger) | Get XLM Blockchain Information
[**xlmGetLedger()**](#xlmgetledger) | Get XLM Blockchain Ledger by sequence
[**xlmGetLedgerTx()**](#xlmgetledgertx) | Get XLM Blockchain Transactions in Ledger
[**xlmGetTransaction()**](#xlmgettransaction) | Get XLM Transaction by hash
[**xlmWallet()**](#xlmwallet) | Generate XLM account


## `transferXlmBlockchain()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **transferXlmBlockchain.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/StellarApi/transferXlmBlockchain.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/xlm/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->stellar()->transferXlmBlockchain(
    \Tatum\Model\TransferXlmBlockchain $transfer_xlm_blockchain
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_xlm_blockchain** | [**\Tatum\Model\TransferXlmBlockchain**](../../Model/TransferXlmBlockchain) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Send XLM from address to address

#### 10 credits per API call.

Send XLM from account to account. It is possbile to send native XLM asset, or any other custom asset present on the network. This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and loss of funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, [Tatum KMS](https://github.com/tatumio/tatum-kms) should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.

[Back to top](#top){: .btn .btn-purple }

---


## `transferXlmBlockchainAsset()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **transferXlmBlockchainAsset.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/StellarApi/transferXlmBlockchainAsset.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/xlm/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->stellar()->transferXlmBlockchainAsset(
    \Tatum\Model\TransferXlmBlockchainAsset $transfer_xlm_blockchain_asset
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_xlm_blockchain_asset** | [**\Tatum\Model\TransferXlmBlockchainAsset**](../../Model/TransferXlmBlockchainAsset) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Send XLM from address to address



[Back to top](#top){: .btn .btn-purple }

---


## `transferXlmBlockchainKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **transferXlmBlockchainKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/StellarApi/transferXlmBlockchainKMS.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/xlm/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->stellar()->transferXlmBlockchainKMS(
    \Tatum\Model\TransferXlmBlockchainKMS $transfer_xlm_blockchain_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_xlm_blockchain_kms** | [**\Tatum\Model\TransferXlmBlockchainKMS**](../../Model/TransferXlmBlockchainKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Send XLM from address to address



[Back to top](#top){: .btn .btn-purple }

---


## `transferXlmBlockchainKMSAsset()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **transferXlmBlockchainKMSAsset.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/StellarApi/transferXlmBlockchainKMSAsset.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/xlm/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->stellar()->transferXlmBlockchainKMSAsset(
    \Tatum\Model\TransferXlmBlockchainKMSAsset $transfer_xlm_blockchain_kms_asset
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_xlm_blockchain_kms_asset** | [**\Tatum\Model\TransferXlmBlockchainKMSAsset**](../../Model/TransferXlmBlockchainKMSAsset) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Send XLM from address to address



[Back to top](#top){: .btn .btn-purple }

---


## `trustLineXlmBlockchain()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **trustLineXlmBlockchain.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/StellarApi/trustLineXlmBlockchain.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/xlm/trust`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->stellar()->trustLineXlmBlockchain(
    \Tatum\Model\TrustLineXlmBlockchain $trust_line_xlm_blockchain
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$trust_line_xlm_blockchain** | [**\Tatum\Model\TrustLineXlmBlockchain**](../../Model/TrustLineXlmBlockchain) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Create / Update / Delete XLM trust line

#### 10 credits per API call.

Create / Update / Delete XLM trust line between accounts to transfer private assets. By creating trustline for the first time, the asset is created automatically and can be used in the transactions. This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and loss of funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, [Tatum KMS](https://github.com/tatumio/tatum-kms) should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.

[Back to top](#top){: .btn .btn-purple }

---


## `trustLineXlmBlockchainKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **trustLineXlmBlockchainKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/StellarApi/trustLineXlmBlockchainKMS.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/xlm/trust`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->stellar()->trustLineXlmBlockchainKMS(
    \Tatum\Model\TrustLineXlmBlockchainKMS $trust_line_xlm_blockchain_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$trust_line_xlm_blockchain_kms** | [**\Tatum\Model\TrustLineXlmBlockchainKMS**](../../Model/TrustLineXlmBlockchainKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Create / Update / Delete XLM trust line



[Back to top](#top){: .btn .btn-purple }

---


## `xlmBroadcast()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **xlmBroadcast.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/StellarApi/xlmBroadcast.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/xlm/broadcast`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->stellar()->xlmBroadcast(
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

> Broadcast signed XLM transaction

#### 5 credits per API call.

Broadcast signed transaction to XLM blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.

[Back to top](#top){: .btn .btn-purple }

---


## `xlmGetAccountInfo()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **xlmGetAccountInfo.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/StellarApi/xlmGetAccountInfo.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/xlm/account/{account}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->stellar()->xlmGetAccountInfo(
    string $account
): \Tatum\Model\XlmAccount
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$account** | **string**  | Account address you want to get balance of |

### Return type

[**\Tatum\Model\XlmAccount**](../../Model/XlmAccount)

### Description

> Get XLM Account info

#### 5 credits per API call.

Get XLM Account detail.

[Back to top](#top){: .btn .btn-purple }

---


## `xlmGetAccountTx()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **xlmGetAccountTx.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/StellarApi/xlmGetAccountTx.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/xlm/account/tx/{account}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->stellar()->xlmGetAccountTx(
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

[**\Tatum\Model\XlmTx[]**](../../Model/XlmTx)

### Description

> Get XLM Account transactions

#### 5 credits per API call.

List all XLM account transactions.

[Back to top](#top){: .btn .btn-purple }

---


## `xlmGetFee()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **xlmGetFee.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/StellarApi/xlmGetFee.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/xlm/fee`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->stellar()->xlmGetFee(): float
```

### Parameters

This endpoint does not need any parameter.

### Return type

**float**

### Description

> Get actual XLM fee

#### 5 credits per API call.

Get XLM Blockchain fee in 1/10000000 of XLM (stroop)

[Back to top](#top){: .btn .btn-purple }

---


## `xlmGetLastClosedLedger()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **xlmGetLastClosedLedger.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/StellarApi/xlmGetLastClosedLedger.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/xlm/info`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->stellar()->xlmGetLastClosedLedger(): \Tatum\Model\XlmLedger
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\XlmLedger**](../../Model/XlmLedger)

### Description

> Get XLM Blockchain Information

#### 5 credits per API call.

Get XLM Blockchain last closed ledger.

[Back to top](#top){: .btn .btn-purple }

---


## `xlmGetLedger()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **xlmGetLedger.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/StellarApi/xlmGetLedger.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/xlm/ledger/{sequence}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->stellar()->xlmGetLedger(
    string $sequence
): \Tatum\Model\XlmLedger
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$sequence** | **string**  | Sequence of the ledger. |

### Return type

[**\Tatum\Model\XlmLedger**](../../Model/XlmLedger)

### Description

> Get XLM Blockchain Ledger by sequence

#### 5 credits per API call.

Get XLM Blockchain ledger for ledger sequence.

[Back to top](#top){: .btn .btn-purple }

---


## `xlmGetLedgerTx()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **xlmGetLedgerTx.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/StellarApi/xlmGetLedgerTx.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/xlm/ledger/{sequence}/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->stellar()->xlmGetLedgerTx(
    string $sequence
): \Tatum\Model\XlmTx[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$sequence** | **string**  | Sequence of the ledger. |

### Return type

[**\Tatum\Model\XlmTx[]**](../../Model/XlmTx)

### Description

> Get XLM Blockchain Transactions in Ledger

#### 5 credits per API call.

Get XLM Blockchain transactions in the ledger.

[Back to top](#top){: .btn .btn-purple }

---


## `xlmGetTransaction()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **xlmGetTransaction.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/StellarApi/xlmGetTransaction.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/xlm/transaction/{hash}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->stellar()->xlmGetTransaction(
    string $hash
): \Tatum\Model\XlmTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Transaction hash |

### Return type

[**\Tatum\Model\XlmTx**](../../Model/XlmTx)

### Description

> Get XLM Transaction by hash

#### 5 credits per API call.

Get XLM Transaction by transaction hash.

[Back to top](#top){: .btn .btn-purple }

---


## `xlmWallet()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **xlmWallet.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/StellarApi/xlmWallet.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/xlm/account`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->stellar()->xlmWallet(): \Tatum\Model\XlmWallet
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\XlmWallet**](../../Model/XlmWallet)

### Description

> Generate XLM account

#### 5 credits per API call.

Generate XLM account. Tatum does not support HD wallet for XLM, only specific address and private key can be generated.

[Back to top](#top){: .btn .btn-purple }

---
