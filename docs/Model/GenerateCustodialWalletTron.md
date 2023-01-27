---
title: GenerateCustodialWalletTron
parent: Model
layout: page
---

# GenerateCustodialWalletTron

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. <br>Example: `TRON` |
**getFeeLimit()** | **float** | Fee in TRX to be paid. <br>Example: `0.01` |
**getFromPrivateKey()** | **string** | Private key of account, from which the transaction will be initiated. <br>Example: `842E09EB40D8175979EFB0071B28163E11AED0F14BDD84090A4CEFB936EF5701` |
**getEnableFungibleTokens()** | **bool** | If address should support ERC20 tokens, it should be marked as true. <br>Example: `false` |
**getEnableNonFungibleTokens()** | **bool** | If address should support ERC721 tokens, it should be marked as true. <br>Example: `false` |
**getEnableSemiFungibleTokens()** | **bool** | If address should support ERC1155 tokens, it should be marked as true. Not supported for TRON. <br>Example: `false` |
**getEnableBatchTransactions()** | **bool** | If address should support batch transfers of the assets, it should be marked as true. <br>Example: `false` |

