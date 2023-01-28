---
title: Bitcoin Cash
parent: API
layout: page
---

# Api/BitcoinCashApi

[Bitcoin Cash API Reference](https://apidoc.tatum.io/tag/Bitcoin-Cash/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->bitcoinCash();

// TestNet API Call
$sdk->testnet()->api()->bitcoinCash();
```

## Methods

Method | Description
------------- | -------------
[**bchBroadcast()**](#bchbroadcast) | Broadcast signed Bitcoin Cash transaction
[**bchGenerateAddress()**](#bchgenerateaddress) | Generate Bitcoin Cash deposit address from Extended public key
[**bchGenerateAddressPrivateKey()**](#bchgenerateaddressprivatekey) | Generate Bitcoin Cash private key
[**bchGenerateWallet()**](#bchgeneratewallet) | Generate Bitcoin Cash wallet
[**bchGetBlock()**](#bchgetblock) | Get Bitcoin Cash Block by hash
[**bchGetBlockChainInfo()**](#bchgetblockchaininfo) | Get Bitcoin Cash Blockchain Information
[**bchGetBlockHash()**](#bchgetblockhash) | Get Bitcoin Cash Block hash
[**bchGetRawTransaction()**](#bchgetrawtransaction) | Get Bitcoin Cash Transaction by hash
[**bchGetTxByAddress()**](#bchgettxbyaddress) | Get Bitcoin Cash Transactions by address
[**bchTransaction()**](#bchtransaction) | Send BCH to Bitcoin Cash addresses
[**bchTransactionKMS()**](#bchtransactionkms) | Send BCH to Bitcoin Cash addresses


## `bchBroadcast()`

### Example

[👉 View "**bchBroadcast.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BitcoinCashApi/bchBroadcast.php)

### Request

> **POST** `/v3/bcash/broadcast`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bitcoinCash()->bchBroadcast(
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

Broadcast signed Bitcoin Cash transaction

<h4>5 credits per API call.</h4>

 Broadcast signed transaction to Bitcoin Cash blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.

[Back to top](#top)



## `bchGenerateAddress()`

### Example

[👉 View "**bchGenerateAddress.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BitcoinCashApi/bchGenerateAddress.php)

### Request

> **GET** `/v3/bcash/address/{xpub}/{index}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bitcoinCash()->bchGenerateAddress(
    string $xpub,
    float $index
): \Tatum\Model\BchGenerateAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xpub** | **string**  | Extended public key of wallet. |
 **$index** | **float**  | Derivation index of desired address to be generated. |

### Return type

[**\Tatum\Model\BchGenerateAddress200Response**](../../Model/BchGenerateAddress200Response)

### Description

Generate Bitcoin Cash deposit address from Extended public key

<h4>5 credits per API call.</h4>

 Generate Bitcoin Cash deposit address from Extended public key. Deposit address is generated for the specific index - each extended public key can generate up to 2^31 addresses starting from index 0 until 2^31 - 1. Generates new format of address starting with bitcoincash: in case of mainnet, bchtest: in case of testnet..

[Back to top](#top)



## `bchGenerateAddressPrivateKey()`

### Example

[👉 View "**bchGenerateAddressPrivateKey.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BitcoinCashApi/bchGenerateAddressPrivateKey.php)

### Request

> **POST** `/v3/bcash/wallet/priv`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bitcoinCash()->bchGenerateAddressPrivateKey(
    \Tatum\Model\PrivKeyRequest $priv_key_request
): \Tatum\Model\PrivKey
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$priv_key_request** | [**\Tatum\Model\PrivKeyRequest**](../../Model/PrivKeyRequest) |  |

### Return type

[**\Tatum\Model\PrivKey**](../../Model/PrivKey)

### Description

Generate Bitcoin Cash private key

<h4>5 credits per API call.</h4>

 Generate private key for address from mnemonic for given derivation path index. Private key is generated for the specific index - each mnemonic can generate up to 2^32 private keys starting from index 0 until 2^31 - 1.

[Back to top](#top)



## `bchGenerateWallet()`

### Example

[👉 View "**bchGenerateWallet.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BitcoinCashApi/bchGenerateWallet.php)

### Request

> **GET** `/v3/bcash/wallet`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bitcoinCash()->bchGenerateWallet(
    [ string $mnemonic ]
): \Tatum\Model\Wallet
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mnemonic** | **string**  | Mnemonic to use for generation of extended public and private keys. | [optional]

### Return type

[**\Tatum\Model\Wallet**](../../Model/Wallet)

### Description

Generate Bitcoin Cash wallet

<h4>5 credits per API call.</h4>

Tatum supports BIP44 HD wallets. It is very convenient and secure, since it can generate 2^31 addresses from 1 mnemonic phrase. Mnemonic phrase consists of 24 special words in defined order and can restore access to all generated addresses and private keys.

Each address is identified by 3 main values:

<ul><li>Private Key - your secret value, which should never be revealed</li><li>Public Key - public address to be published</li><li>Derivation index - index of generated address</li></ul>

Tatum follows BIP44 specification and generates for Bitcoin Cash wallet with derivation path m'/44'/145'/0'/0. More about BIP44 HD wallets can be found here - <a target="_blank" href="https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki">https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki</a>. Generate BIP44 compatible Bitcoin Cash wallet.

[Back to top](#top)



## `bchGetBlock()`

### Example

[👉 View "**bchGetBlock.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BitcoinCashApi/bchGetBlock.php)

### Request

> **GET** `/v3/bcash/block/{hash}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bitcoinCash()->bchGetBlock(
    string $hash
): \Tatum\Model\BchBlock
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Block hash or height |

### Return type

[**\Tatum\Model\BchBlock**](../../Model/BchBlock)

### Description

Get Bitcoin Cash Block by hash

<h4>5 credits per API call.</h4>

Get Bitcoin Cash Block detail by block hash or height.

[Back to top](#top)



## `bchGetBlockChainInfo()`

### Example

[👉 View "**bchGetBlockChainInfo.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BitcoinCashApi/bchGetBlockChainInfo.php)

### Request

> **GET** `/v3/bcash/info`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bitcoinCash()->bchGetBlockChainInfo(): \Tatum\Model\BchInfo
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\BchInfo**](../../Model/BchInfo)

### Description

Get Bitcoin Cash Blockchain Information

<h4>5 credits per API call.</h4>

Get Bitcoin Cash Blockchain Information. Obtain basic info like testnet / mainnet version of the chain, current block number and it's hash.

[Back to top](#top)



## `bchGetBlockHash()`

### Example

[👉 View "**bchGetBlockHash.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BitcoinCashApi/bchGetBlockHash.php)

### Request

> **GET** `/v3/bcash/block/hash/{i}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bitcoinCash()->bchGetBlockHash(
    float $i
): \Tatum\Model\BchGetBlockHash200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$i** | **float**  | The number of blocks preceding a particular block on a block chain. |

### Return type

[**\Tatum\Model\BchGetBlockHash200Response**](../../Model/BchGetBlockHash200Response)

### Description

Get Bitcoin Cash Block hash

<h4>5 credits per API call.</h4>

Get Bitcoin Cash Block hash. Returns hash of the block to get the block detail.

[Back to top](#top)



## `bchGetRawTransaction()`

### Example

[👉 View "**bchGetRawTransaction.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BitcoinCashApi/bchGetRawTransaction.php)

### Request

> **GET** `/v3/bcash/transaction/{hash}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bitcoinCash()->bchGetRawTransaction(
    string $hash
): \Tatum\Model\BchTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Transaction hash |

### Return type

[**\Tatum\Model\BchTx**](../../Model/BchTx)

### Description

Get Bitcoin Cash Transaction by hash

<h4>5 credits per API call.</h4>

Get Bitcoin Cash Transaction by transaction hash.

[Back to top](#top)



## `bchGetTxByAddress()`

### Example

[👉 View "**bchGetTxByAddress.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BitcoinCashApi/bchGetTxByAddress.php)

### Request

> **GET** `/v3/bcash/transaction/address/{address}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bitcoinCash()->bchGetTxByAddress(
    string $address,
    [ int $skip ]
): \Tatum\Model\BchTx[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Address |
 **$skip** | **int**  | Define, how much transactions should be skipped to obtain another page. | [optional]

### Return type

[**\Tatum\Model\BchTx[]**](../../Model/BchTx)

### Description

Get Bitcoin Cash Transactions by address

<h4>5 credits per API call.</h4>

Get Bitcoin Cash Transaction by address. Limit is 50 transaction per response.

[Back to top](#top)



## `bchTransaction()`

### Example

[👉 View "**bchTransaction.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BitcoinCashApi/bchTransaction.php)

### Request

> **POST** `/v3/bcash/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bitcoinCash()->bchTransaction(
    \Tatum\Model\BchTransaction $bch_transaction
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$bch_transaction** | [**\Tatum\Model\BchTransaction**](../../Model/BchTransaction) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Send BCH to Bitcoin Cash addresses

**10 credits per API call**

 Send BCH to blockchain addresses.

 Bitcoin Cash transactions are based on UTXOs. "UTXO" stands for "Unspent Transaction Output". A UTXO is the amount of BCH that remains at a Bitcoin Cash address after a cryptocurrency transaction involving this address has been performed. The UTXO can then be used as input for a new cryptocurrency transaction. For more information the UTXO, see the <a href="https://developer.bitcoin.org/devguide/transactions.html" target="_blank">Bitcoin user documentation</a>.

 You build a BCH transaction by sending BCH from UTXOs. Each UTXO is included in the transaction.

 When an UTXO is entered into a transaction, the whole UTXO amount is included and must be spent. For example, address A receives two transactions, T1 with 1 BCH and T2 with 2 BCH. A transaction that consumes the UTXOs from both T1 and T2 will have an available amount of 3 BCH to spend:

<code>1 BCH (from T1) + 2 BCH (from T2) = 3 BCH (to spend in total)</code>

 You can send the assets to one or multiple recipients in one transaction. If you send the assets to multiple addresses, each address must have its own amount to receive.

 **Paying the gas fee and receiving the change**

 When the amount that the recipients should receive is lower than the amount from the UTXOs, the difference between these two amounts is by default used as the gas fee for the transaction. Because this amount may be considerable and you may not want to spend it all on the gas fee, you can explicitly specify the fee amount and the blockchain address where any extra funds remaining after covering the fee will be sent (the <code>fee</code> and <code>changeAddress</code> parameters in the request body, correspondingly).

 **Signing a transaction**

 When sending BCH, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

[Back to top](#top)



## `bchTransactionKMS()`

### Example

[👉 View "**bchTransactionKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BitcoinCashApi/bchTransactionKMS.php)

### Request

> **POST** `/v3/bcash/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->bitcoinCash()->bchTransactionKMS(
    \Tatum\Model\BchTransactionKMS $bch_transaction_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$bch_transaction_kms** | [**\Tatum\Model\BchTransactionKMS**](../../Model/BchTransactionKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Send BCH to Bitcoin Cash addresses

BchTransactionKMS operation

[Back to top](#top)

