---
title: SellAssetOnMarketplaceCeloKMS
parent: Model
layout: page
---

# SellAssetOnMarketplaceCeloKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. | ex.: `CELO`
**getFeeCurrency()** | **string** | The currency in which the transaction fee will be paid | ex.: `null`
**getContractAddress()** | **string** | Address of the marketplace smart contract. | ex.: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85`
**getNftAddress()** | **string** | Address of the NFT asset to sell smart contract. | ex.: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85`
**getSeller()** | **string** | Address of the seller of the NFT asset. | ex.: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85`
**getErc20Address()** | **string** | Optional address of the ERC20 token, which will be used as a selling currency of the NFT. | ex.: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` [optional]
**getListingId()** | **string** | ID of the listing. It's up to the developer to generate unique ID | ex.: `null`
**getAmount()** | **string** | Amount of the assets to be sent. For ERC-721 tokens, enter amount only in case of natiev currency cashback. | ex.: `1` [optional]
**getTokenId()** | **string** | ID of token, if transaction is for ERC-721 or ERC-1155. | ex.: `100000`
**getPrice()** | **string** | Price of the asset to sell. Marketplace fee will be obtained on top of this price. | ex.: `100000`
**getIsErc721()** | **bool** | True if asset is NFT of type ERC721, false if ERC1155. | ex.: `true`
**getSignatureId()** | **string** | The KMS identifier of the private key of the seller's blockchain address | ex.: `26d3883e-4e17-48b3-a0ee-09a3e484ac83`
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | ex.: `null` [optional]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | ex.: `1` [optional]
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](../DeployErc20Fee) |  | ex.: `null` [optional]

