---
title: UpdateCashbackValueForAuthorNftKMSTron
parent: Model
layout: page
---

# UpdateCashbackValueForAuthorNftKMSTron

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with <br>Example: `TRON` |
**getTokenId()** | **string** | The ID of the NFT to update royalty information for <br>Example: `123` |
**getContractAddress()** | **string** | The blockchain address of the NFT to update royalty information for <br>Example: `TCrmdJmvDUPy8qSTgoVStF51yWm6VUh5yQ` |
**getCashbackValue()** | **string** | The new value of the royalty cashback to be set for the author of the NFT; to disable the royalties for the NFT completely, set this parameter to 0 <br>Example: `0.1` |
**getFeeLimit()** | **float** | The maximum amount to be paid as the transaction fee (in TRX) <br>Example: `600` |
**getAccount()** | **string** | The blockchain address of the NFT author from which the transaction will be performed <br>Example: `TCrmdJmvDUPy8qSTgoVStF51yWm6VUh5yQ` |
**getSignatureId()** | **string** | The KMS identifier of the private key of the NFT author's address <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |
**getIndex()** | **float** | (Only if the signature ID is mnemonic-based) The index of the NFT author's address that was generated from the mnemonic <br>Example: `null` | [optional]

