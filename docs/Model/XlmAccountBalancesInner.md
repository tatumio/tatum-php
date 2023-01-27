---
title: XlmAccountBalancesInner
parent: Model
layout: page
---

# XlmAccountBalancesInner

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getBalance()** | **string** | The number of units of an asset held by this account. | ex.: `99.9999000` [optional]
**getLimit()** | **string** | The maximum amount of this asset that this account is willing to accept. Specified when opening a trustline. | ex.: `99.9999000` [optional]
**getBuyingLiabilities()** | **string** | The sum of all buy offers owned by this account for this asset. | ex.: `0.0000000` [optional]
**getSellingLiabilities()** | **string** | The sum of all sell offers owned by this account for this asset. | ex.: `0.0000000` [optional]
**getAssetType()** | **string** | Either native, credit_alphanum4, or credit_alphanum12. | ex.: `native` [optional]
**getAssetCode()** | **string** | The code for this asset. | ex.: `EURT` [optional]
**getAssetIssuer()** | **string** | The Stellar address of this asset’s issuer. | ex.: `GBRPYHIL2CI3FNQ4BXLFMNDLFJUNPU2HY3ZMFSHONUCEOASW7QC7OX2H` [optional]

