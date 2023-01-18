---
title: CancelSellAssetOnMarketplaceKMS
parent: Model
layout: page
---

# CancelSellAssetOnMarketplaceKMS model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. |
**getContractAddress()** | **string** | Address of the marketplace smart contract. |
**getErc20Address()** | **string** | Optional address of the ERC20 token, which will be used as a selling currency of the NFT. | [optional]
**getListingId()** | **string** | ID of the listing. It's up to the developer to generate unique ID |
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](../DeployErc20Fee) |  | [optional]

