---
title: GenerateCustodialWalletCelo
parent: Model
layout: page
---

# GenerateCustodialWalletCelo

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. <br>Example: `CELO` |
**getFeeCurrency()** | **string** | The currency in which the gas fee will be paid <br>Example: `null` | [optional] [default to 'CELO']
**getFromPrivateKey()** | **string** | Private key of account, from which the transaction will be initiated. <br>Example: `0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2` |
**getEnableFungibleTokens()** | **bool** | If address should support ERC20 tokens, it should be marked as true. <br>Example: `false` |
**getEnableNonFungibleTokens()** | **bool** | If address should support ERC721 tokens, it should be marked as true. <br>Example: `false` |
**getEnableSemiFungibleTokens()** | **bool** | If address should support ERC1155 tokens, it should be marked as true. <br>Example: `false` |
**getEnableBatchTransactions()** | **bool** | If address should support batch transfers of the assets, it should be marked as true. <br>Example: `false` |
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](../DeployErc20Fee) |  <br>Example: `null` | [optional]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used <br>Example: `null` | [optional]

