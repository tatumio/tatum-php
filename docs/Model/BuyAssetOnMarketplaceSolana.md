---
title: BuyAssetOnMarketplaceSolana
parent: Model
layout: page
---

# BuyAssetOnMarketplaceSolana

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with | ex.: `SOL`
**getContractAddress()** | **string** | The blockchain address of the marketplace smart contract | ex.: `FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU`
**getListingId()** | **mixed** | The blockchain address of the listing with the asset that you want to buy | ex.: `FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU`
**getFrom()** | **mixed** | The blockchain address of the buyer | ex.: `FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU`
**getAuthorityPrivateKey()** | **string** | The private key used for signing transactions as authority; required if <code>requiresSignOff</code> is set to "true" for the marketplace | ex.: `zgsAKfjuXrAxEyuYRxbbxPM3rdsPbJPnGreaGMbcdUApJ6wHnCqQnf9b1RNPdeZxsRMkezh4VgXQ7YrbpndGtEv` [optional]
**getFromPrivateKey()** | **string** | The private key of the buyer | ex.: `zgsAKfjuXrAxEyuYRxbbxPM3rdsPbJPnGreaGMbcdUApJ6wHnCqQnf9b1RNPdeZxsRMkezh4VgXQ7YrbpndGtEv`

