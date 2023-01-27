---
title: GenerateCustodialWallet
parent: Model
layout: page
---

# GenerateCustodialWallet

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. | ex.: `ETH`
**getFromPrivateKey()** | **string** | Private key of account, from which the transaction will be initiated. | ex.: `0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2`
**getEnableFungibleTokens()** | **bool** | If address should support ERC20 tokens, it should be marked as true. | ex.: `false`
**getEnableNonFungibleTokens()** | **bool** | If address should support ERC721 tokens, it should be marked as true. | ex.: `false`
**getEnableSemiFungibleTokens()** | **bool** | If address should support ERC1155 tokens, it should be marked as true. | ex.: `false`
**getEnableBatchTransactions()** | **bool** | If address should support batch transfers of the assets, it should be marked as true. | ex.: `false`
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](../DeployErc20Fee) |  | ex.: `null` [optional]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | ex.: `null` [optional]

