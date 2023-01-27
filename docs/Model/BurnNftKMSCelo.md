---
title: BurnNftKMSCelo
parent: Model
layout: page
---

# BurnNftKMSCelo

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with | ex.: `CELO`
**getTokenId()** | **string** | ID of token to be destroyed. | ex.: `123`
**getContractAddress()** | **string** | Address of NFT token | ex.: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85`
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | ex.: `null` [optional]
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. | ex.: `26d3883e-4e17-48b3-a0ee-09a3e484ac83`
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | ex.: `null` [optional]
**getFeeCurrency()** | **string** | The currency in which the transaction fee will be paid | ex.: `null`

