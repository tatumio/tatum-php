---
title: SellAssetOnMarketplaceTron
parent: Model
layout: page
---

# SellAssetOnMarketplaceTron

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. | ex.: `TRON`
**getContractAddress()** | **string** | Address of the marketplace smart contract. | ex.: `TYMwiDu22V6XG3yk6W9cTVBz48okKLRczh`
**getNftAddress()** | **string** | Address of the NFT asset to sell smart contract. | ex.: `TYMwiDu22V6XG3yk6W9cTVBz48okKLRczh`
**getSeller()** | **string** | Address of the seller of the NFT asset. | ex.: `TYMwiDu22V6XG3yk6W9cTVBz48okKLRczh`
**getErc20Address()** | **string** | Optional address of the TRC20 token, which will be used as a selling currency of the NFT. | ex.: `TYMwiDu22V6XG3yk6W9cTVBz48okKLRczh` [optional]
**getListingId()** | **string** | ID of the listing. It's up to the developer to generate unique ID | ex.: `null`
**getAmount()** | **string** | Amount of the assets to be sent. For ERC-721 tokens, enter 1. | ex.: `1` [optional]
**getTokenId()** | **string** | ID of token, if transaction is for ERC-721 or ERC-1155. | ex.: `100000`
**getPrice()** | **string** | Price of the asset to sell. Marketplace fee will be obtained on top of this price. | ex.: `100000`
**getIsErc721()** | **bool** | True if asset is NFT of type ERC721, false if ERC1155. | ex.: `true`
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. | ex.: `05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2`
**getFeeLimit()** | **float** | Fee in TRX to be paid. | ex.: `0.01`

