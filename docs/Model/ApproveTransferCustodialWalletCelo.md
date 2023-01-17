---
title: ApproveTransferCustodialWalletCelo
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with |
**getCustodialAddress()** | **string** | The gas pump address that holds the asset |
**getSpender()** | **string** | The blockchain address to allow the transfer of the asset from the gas pump address |
**getContractType()** | **float** | The type of the asset to transfer. Set <code>0</code> for fungible tokens (ERC-20 or equivalent), <code>1</code> for NFTs (ERC-721 or equivalent), or <code>2</code> for Multi Tokens (ERC-1155 or equivalent). |
**getTokenAddress()** | **string** | The address of the asset to transfer |
**getAmount()** | **string** | (Only if the asset is a fungible token or Multi Token) The amount of the asset to transfer. Do not use if the asset is an NFT. | [optional]
**getTokenId()** | **string** | (Only if the asset is a Multi Token or NFT) The ID of the token to transfer. Do not use if the asset is a fungible token. | [optional]
**getFromPrivateKey()** | **string** | The private key of the blockchain address that owns the gas pump address ("master address") |
**getFeeCurrency()** | **string** | The currency in which the gas fee will be paid | [optional] [default to 'CELO']
**getNonce()** | **float** | The nonce to be set to the transfer transaction; if not present, the last known nonce will be used | [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](CustomFee.md) |  | [optional]

[[Back to Index]](../index.md)
