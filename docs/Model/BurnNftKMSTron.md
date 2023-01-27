---
title: BurnNftKMSTron
parent: Model
layout: page
---

# BurnNftKMSTron

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with | ex.: `TRON`
**getAccount()** | **string** | Blockchain address to perform transaction from | ex.: `TCrmdJmvDUPy8qSTgoVStF51yWm6VUh5yQ`
**getTokenId()** | **string** | ID of token to be destroyed. | ex.: `123`
**getContractAddress()** | **string** | Address of NFT token | ex.: `TCrmdJmvDUPy8qSTgoVStF51yWm6VUh5yQ`
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | ex.: `null` [optional]
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. | ex.: `26d3883e-4e17-48b3-a0ee-09a3e484ac83`
**getFeeLimit()** | **float** | The maximum amount to be paid as the transaction fee (in TRX) | ex.: `600`

