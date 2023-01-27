---
title: CancelSellAssetOnMarketplaceKMS
parent: Model
layout: page
---

# CancelSellAssetOnMarketplaceKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. | ex.: `ETH`
**getContractAddress()** | **string** | Address of the marketplace smart contract. | ex.: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85`
**getErc20Address()** | **string** | Optional address of the ERC20 token, which will be used as a selling currency of the NFT. | ex.: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` [optional]
**getListingId()** | **string** | ID of the listing. It's up to the developer to generate unique ID | ex.: `null`
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. | ex.: `26d3883e-4e17-48b3-a0ee-09a3e484ac83`
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | ex.: `null` [optional]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | ex.: `1` [optional]
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](../DeployErc20Fee) |  | ex.: `null` [optional]

