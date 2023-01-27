---
title: GenerateCustodialWalletTronKMS
parent: Model
layout: page
---

# GenerateCustodialWalletTronKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. | ex.: `TRON`
**getFeeLimit()** | **float** | Fee in TRX to be paid. | ex.: `0.01`
**getFrom()** | **string** | Sender address of TRON account in Base58 format. | ex.: `TYMwiDu22V6XG3yk6W9cTVBz48okKLRczh`
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. | ex.: `26d3883e-4e17-48b3-a0ee-09a3e484ac83`
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | ex.: `null` [optional]
**getEnableFungibleTokens()** | **bool** | If address should support ERC20 tokens, it should be marked as true. | ex.: `false`
**getEnableNonFungibleTokens()** | **bool** | If address should support ERC721 tokens, it should be marked as true. | ex.: `false`
**getEnableSemiFungibleTokens()** | **bool** | If address should support ERC1155 tokens, it should be marked as true. Not supported for TRON. | ex.: `false`
**getEnableBatchTransactions()** | **bool** | If address should support batch transfers of the assets, it should be marked as true. | ex.: `false`

