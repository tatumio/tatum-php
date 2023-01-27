---
title: GenerateCustodialWalletCeloKMS
parent: Model
layout: page
---

# GenerateCustodialWalletCeloKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. | ex.: `CELO`
**getFeeCurrency()** | **string** | The currency in which the gas fee will be paid | ex.: `null` [optional] [default to 'CELO']
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. | ex.: `26d3883e-4e17-48b3-a0ee-09a3e484ac83`
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | ex.: `null` [optional]
**getEnableFungibleTokens()** | **bool** | If address should support ERC20 tokens, it should be marked as true. | ex.: `false`
**getEnableNonFungibleTokens()** | **bool** | If address should support ERC721 tokens, it should be marked as true. | ex.: `false`
**getEnableSemiFungibleTokens()** | **bool** | If address should support ERC1155 tokens, it should be marked as true. | ex.: `false`
**getEnableBatchTransactions()** | **bool** | If address should support batch transfers of the assets, it should be marked as true. | ex.: `false`
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](../DeployErc20Fee) |  | ex.: `null` [optional]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | ex.: `null` [optional]

