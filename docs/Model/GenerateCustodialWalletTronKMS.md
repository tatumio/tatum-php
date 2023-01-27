---
title: GenerateCustodialWalletTronKMS
parent: Model
layout: page
---

# GenerateCustodialWalletTronKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. <br>Example: `TRON` |
**getFeeLimit()** | **float** | Fee in TRX to be paid. <br>Example: `0.01` |
**getFrom()** | **string** | Sender address of TRON account in Base58 format. <br>Example: `TYMwiDu22V6XG3yk6W9cTVBz48okKLRczh` |
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. <br>Example: `null` | [optional]
**getEnableFungibleTokens()** | **bool** | If address should support ERC20 tokens, it should be marked as true. <br>Example: `false` |
**getEnableNonFungibleTokens()** | **bool** | If address should support ERC721 tokens, it should be marked as true. <br>Example: `false` |
**getEnableSemiFungibleTokens()** | **bool** | If address should support ERC1155 tokens, it should be marked as true. Not supported for TRON. <br>Example: `false` |
**getEnableBatchTransactions()** | **bool** | If address should support batch transfers of the assets, it should be marked as true. <br>Example: `false` |

