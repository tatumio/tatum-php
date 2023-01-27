---
title: TransferNftKMSTron
parent: Model
layout: page
---

# TransferNftKMSTron

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getValue()** | **string** | If token to be transferred is Royalty NFT token, this is a value to be paid as a cashback to the authors of the token. <br>Example: `1` | [optional]
**getChain()** | **string** | The blockchain to work with <br>Example: `TRON` |
**getAccount()** | **string** | Blockchain address to perform transaction from <br>Example: `TCrmdJmvDUPy8qSTgoVStF51yWm6VUh5yQ` |
**getTo()** | **string** | Blockchain address to send NFT token to <br>Example: `TCrmdJmvDUPy8qSTgoVStF51yWm6VUh5yQ` |
**getTokenId()** | **string** | ID of the token. <br>Example: `123` |
**getContractAddress()** | **string** | Address of NFT token <br>Example: `TCrmdJmvDUPy8qSTgoVStF51yWm6VUh5yQ` |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. <br>Example: `null` | [optional]
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |
**getFeeLimit()** | **float** | The maximum amount to be paid as the transaction fee (in TRX) <br>Example: `600` |

