---
title: BuyAssetOnMarketplaceSolanaKMS
parent: Model
layout: page
---

# BuyAssetOnMarketplaceSolanaKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with | ex.: `SOL`
**getContractAddress()** | **string** | The blockchain address of the marketplace smart contract | ex.: `FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU`
**getListingId()** | **mixed** | The blockchain address of the listing with the asset that you want to buy | ex.: `FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU`
**getFrom()** | **mixed** | The blockchain address of the buyer | ex.: `FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU`
**getAuthoritySignatureId()** | **string** | The KMS identifier of the private key used for signing transactions as authority; required if <code>requiresSignOff</code> is set to "true" for the marketplace | ex.: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` [optional]
**getSignatureId()** | **string** | The KMS identifier of the private key of the buyer | ex.: `26d3883e-4e17-48b3-a0ee-09a3e484ac83`

