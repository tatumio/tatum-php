---
title: SellAssetOnMarketplaceSolana
parent: Model
layout: page
---

# SellAssetOnMarketplaceSolana

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. | ex.: `SOL`
**getContractAddress()** | **string** | Blockchain address of the smart contract | ex.: `FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU`
**getNftAddress()** | **string** | Blockchain address of the asset to sell | ex.: `FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU`
**getFrom()** | **mixed** | Blockchain address of the seller | ex.: `FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU`
**getPrice()** | **string** | Price of the asset to sell. Marketplace fee will be obtained on top of this price. | ex.: `100000`
**getAuthorityPrivateKey()** | **string** | The private key used for signing transactions as authority; required if <code>requiresSignOff</code> is set to "true" for the marketplace | ex.: `zgsAKfjuXrAxEyuYRxbbxPM3rdsPbJPnGreaGMbcdUApJ6wHnCqQnf9b1RNPdeZxsRMkezh4VgXQ7YrbpndGtEv` [optional]
**getFromPrivateKey()** | **string** | The private key of the seller | ex.: `zgsAKfjuXrAxEyuYRxbbxPM3rdsPbJPnGreaGMbcdUApJ6wHnCqQnf9b1RNPdeZxsRMkezh4VgXQ7YrbpndGtEv`

