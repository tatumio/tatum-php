---
title: PendingTransaction
parent: Model
layout: page
---

# PendingTransaction

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getId()** | **string** | ID of the pending transaction <br>Example: `5e6645712b55823de7ea82f1` |
**getChain()** | **string** | Blockchain of the transaction <br>Example: `ETH` |
**getHashes()** | **string[]** | List of the signature Ids to be used to sign transaction. Those hashes should be in order of signing for the BTC, LTC or BCH blockchains. <br>Example: `null` |
**getSerializedTransaction()** | **string** | Serialized data of the transaction to be signed. It can be JSON, HEX or any other representation based on the blockchain. <br>Example: `alskdjfq8o27fbkasljfbq8o7b4fqo83f7bqejhafbo8q4f` |
**getWithdrawalId()** | **string** | ID of the pending off-chain withdrawal connected to this transaction <br>Example: `5e6645712b55823de7ea82f1` | [optional]
**getIndex()** | **float** | In case of mnemonic type of signature Id, this is the index to the specific account that should be used for signature. <br>Example: `1` | [optional]
**getTxId()** | **string** | TX hash of successful transaction. <br>Example: `c83f8818db43d9ba4accfe454aa44fc33123d47a4f89d47b314d6748eb0e9bc9` | [optional]
**getWithdrawalResponses()** | [**\Tatum\Model\ResponseData[]**](../ResponseData) | Additional information used for BTC, LTC, DOGE and BCH off-chain to blockchain transactions. <br>Example: `null` | [optional]

