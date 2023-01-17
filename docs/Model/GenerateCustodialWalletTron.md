---
title: GenerateCustodialWalletTron
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. |
**getFeeLimit()** | **float** | Fee in TRX to be paid. |
**getFromPrivateKey()** | **string** | Private key of account, from which the transaction will be initiated. |
**getEnableFungibleTokens()** | **bool** | If address should support ERC20 tokens, it should be marked as true. |
**getEnableNonFungibleTokens()** | **bool** | If address should support ERC721 tokens, it should be marked as true. |
**getEnableSemiFungibleTokens()** | **bool** | If address should support ERC1155 tokens, it should be marked as true. Not supported for TRON. |
**getEnableBatchTransactions()** | **bool** | If address should support batch transfers of the assets, it should be marked as true. |

