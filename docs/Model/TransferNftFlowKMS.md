---
title: TransferNftFlowKMS
parent: Model
layout: page
---

# TransferNftFlowKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with | ex.: `FLOW`
**getTo()** | **string** | Blockchain address to send NFT token to. | ex.: `0xc1b45bc27b9c61c3`
**getTokenId()** | **string** | ID of token to be sent. | ex.: `123`
**getContractAddress()** | **string** | Address of NFT token | ex.: `17a50dad-bcb1-4f3d-ae2c-ea2bfb04419f`
**getAccount()** | **string** | Blockchain address of the sender account. | ex.: `0xc1b45bc27b9c61c3`
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. | ex.: `26d3883e-4e17-48b3-a0ee-09a3e484ac83`
**getIndex()** | **int** | Derivation index of sender address. | ex.: `0` [optional]

