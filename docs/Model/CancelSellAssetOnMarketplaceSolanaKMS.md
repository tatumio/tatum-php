---
title: CancelSellAssetOnMarketplaceSolanaKMS
parent: Model
layout: page
---

# CancelSellAssetOnMarketplaceSolanaKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. | ex.: `SOL`
**getContractAddress()** | **string** | Blockchain address of the smart contract | ex.: `FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU`
**getListingId()** | **mixed** | Blockchain address of the listing | ex.: `FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU`
**getFrom()** | **mixed** | Blockchain address of the asset owner | ex.: `FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU`
**getAuthoritySignatureId()** | **string** | The KMS identifier of the private key used for signing transactions as authority; required if <code>requiresSignOff</code> is set to "true" for the marketplace | ex.: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` [optional]
**getSignatureId()** | **string** | The KMS identifier of the private key of the asset owner | ex.: `26d3883e-4e17-48b3-a0ee-09a3e484ac83`

