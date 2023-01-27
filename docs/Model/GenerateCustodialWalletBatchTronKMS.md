---
title: GenerateCustodialWalletBatchTronKMS
parent: Model
layout: page
---

# GenerateCustodialWalletBatchTronKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. | ex.: `TRON`
**getFrom()** | **string** | Sender address. | ex.: `TGXh2YJhfwchMGKuzfEJ27W1VEJRKnMdy9`
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. | ex.: `26d3883e-4e17-48b3-a0ee-09a3e484ac83`
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | ex.: `null` [optional]
**getBatchCount()** | **float** | Number of addresses to generate. | ex.: `50`
**getOwner()** | **string** | Owner of the addresses. | ex.: `TGXh2YJhfwchMGKuzfEJ27W1VEJRKnMdy9`
**getFeeLimit()** | **float** | Fee limit to be set, in TRX | ex.: `100`

