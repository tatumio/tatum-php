---
title: SellAssetOnMarketplaceTron
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. |
**getContractAddress()** | **string** | Address of the marketplace smart contract. |
**getNftAddress()** | **string** | Address of the NFT asset to sell smart contract. |
**getSeller()** | **string** | Address of the seller of the NFT asset. |
**getErc20Address()** | **string** | Optional address of the TRC20 token, which will be used as a selling currency of the NFT. | [optional]
**getListingId()** | **string** | ID of the listing. It's up to the developer to generate unique ID |
**getAmount()** | **string** | Amount of the assets to be sent. For ERC-721 tokens, enter 1. | [optional]
**getTokenId()** | **string** | ID of token, if transaction is for ERC-721 or ERC-1155. |
**getPrice()** | **string** | Price of the asset to sell. Marketplace fee will be obtained on top of this price. |
**getIsErc721()** | **bool** | True if asset is NFT of type ERC721, false if ERC1155. |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**getFeeLimit()** | **float** | Fee in TRX to be paid. |

[[Back to Index]](../index.md)
