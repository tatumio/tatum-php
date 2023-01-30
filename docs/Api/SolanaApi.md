---
title: Solana
parent: API
layout: page
---

# Api/SolanaApi

[Solana API Reference](https://apidoc.tatum.io/tag/Solana/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->solana();

// TestNet API Call
$sdk->testnet()->api()->solana();
```

## Methods

Method | Description
------------- | -------------
[**solanaBroadcastConfirm()**](#solanabroadcastconfirm) | Broadcast and confirm signed Solana transaction
[**solanaGenerateWallet()**](#solanageneratewallet) | Generate Solana wallet
[**solanaGetBalance()**](#solanagetbalance) | Get Solana Account balance
[**solanaGetBlock()**](#solanagetblock) | Get Solana block by number
[**solanaGetCurrentBlock()**](#solanagetcurrentblock) | Get current block number
[**solanaGetTransaction()**](#solanagettransaction) | Get Solana Transaction
[**transferSolanaBlockchain()**](#transfersolanablockchain) | Send SOL from account to account
[**transferSolanaBlockchainKMS()**](#transfersolanablockchainkms) | Send SOL from account to account


## `solanaBroadcastConfirm()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **solanaBroadcastConfirm.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/SolanaApi/solanaBroadcastConfirm.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/solana/broadcast/confirm`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->solana()->solanaBroadcastConfirm(
    \Tatum\Model\SolanaBroadcastConfirm $solana_broadcast_confirm
): \Tatum\Model\SolanaTransactionHashWithConfirm
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$solana_broadcast_confirm** | [**\Tatum\Model\SolanaBroadcastConfirm**](../../Model/SolanaBroadcastConfirm) |  |

### Return type

[**\Tatum\Model\SolanaTransactionHashWithConfirm**](../../Model/SolanaTransactionHashWithConfirm)

### Description

> Broadcast and confirm signed Solana transaction

#### 10 credits per API call.

Broadcast signed custom transactions to Solana blockchain and waits for transaction confirmation depending on the commitment given. More information about commitment levels [here](https://docs.solana.com/ru/developing/clients/jsonrpc-api#configuring-state-commitment)

[Back to top](#top){: .btn .btn-purple }

---


## `solanaGenerateWallet()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **solanaGenerateWallet.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/SolanaApi/solanaGenerateWallet.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/solana/wallet`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->solana()->solanaGenerateWallet(): \Tatum\Model\SolanaWallet
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\SolanaWallet**](../../Model/SolanaWallet)

### Description

> Generate Solana wallet

#### 1 credit per API call.

Generate Solana private key and account address.

[Back to top](#top){: .btn .btn-purple }

---


## `solanaGetBalance()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **solanaGetBalance.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/SolanaApi/solanaGetBalance.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/solana/account/balance/{address}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->solana()->solanaGetBalance(
    string $address
): \Tatum\Model\SolBalance
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Account address you want to get balance of |

### Return type

[**\Tatum\Model\SolBalance**](../../Model/SolBalance)

### Description

> Get Solana Account balance

#### 1 credit per API call.

Get Solana account balance in SOL. This method does not prints any balance of the SPL or NFT tokens on the account.

[Back to top](#top){: .btn .btn-purple }

---


## `solanaGetBlock()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **solanaGetBlock.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/SolanaApi/solanaGetBlock.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/solana/block/{height}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->solana()->solanaGetBlock(
    float $height
): \Tatum\Model\SolanaBlock
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$height** | **float**  | Block number |

### Return type

[**\Tatum\Model\SolanaBlock**](../../Model/SolanaBlock)

### Description

> Get Solana block by number

#### 1 credit per API call.

Get Solana block by block hash or block number. You can find full data description here - [https://docs.solana.com/developing/clients/jsonrpc-api#getblock](https://docs.solana.com/developing/clients/jsonrpc-api#getblock)

[Back to top](#top){: .btn .btn-purple }

---


## `solanaGetCurrentBlock()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **solanaGetCurrentBlock.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/SolanaApi/solanaGetCurrentBlock.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/solana/block/current`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->solana()->solanaGetCurrentBlock(): float
```

### Parameters

This endpoint does not need any parameter.

### Return type

**float**

### Description

> Get current block number

#### 1 credit per API call.

Get Solana current block number. This is the number of the latest block in the blockchain.

[Back to top](#top){: .btn .btn-purple }

---


## `solanaGetTransaction()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **solanaGetTransaction.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/SolanaApi/solanaGetTransaction.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/solana/transaction/{hash}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->solana()->solanaGetTransaction(
    string $hash,
    [ string $commitment ]
): \Tatum\Model\SolanaTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Transaction hash |
 **$commitment** | **string**  | Commitment of the transaction. If not defined, all transactions are being scanned. | [optional]

### Return type

[**\Tatum\Model\SolanaTx**](../../Model/SolanaTx)

### Description

> Get Solana Transaction

#### 2 credit per API call.

Get Solana transaction by transaction hash. You can find full data description here - [https://docs.solana.com/developing/clients/jsonrpc-api#gettransaction](https://docs.solana.com/developing/clients/jsonrpc-api#gettransaction)

[Back to top](#top){: .btn .btn-purple }

---


## `transferSolanaBlockchain()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **transferSolanaBlockchain.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/SolanaApi/transferSolanaBlockchain.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/solana/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->solana()->transferSolanaBlockchain(
    \Tatum\Model\TransferSolanaBlockchain $transfer_solana_blockchain
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_solana_blockchain** | [**\Tatum\Model\TransferSolanaBlockchain**](../../Model/TransferSolanaBlockchain) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Send SOL from account to account

#### 2 credits per API call.

Send SOL from account to account. This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and loss of funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, [Tatum KMS](https://github.com/tatumio/tatum-kms) should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.

[Back to top](#top){: .btn .btn-purple }

---


## `transferSolanaBlockchainKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **transferSolanaBlockchainKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/SolanaApi/transferSolanaBlockchainKMS.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/solana/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->solana()->transferSolanaBlockchainKMS(
    \Tatum\Model\TransferSolanaBlockchainKMS $transfer_solana_blockchain_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_solana_blockchain_kms** | [**\Tatum\Model\TransferSolanaBlockchainKMS**](../../Model/TransferSolanaBlockchainKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Send SOL from account to account



[Back to top](#top){: .btn .btn-purple }

---
