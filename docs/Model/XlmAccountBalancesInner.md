---
title: XlmAccountBalancesInner
parent: Model
layout: page
---

# XlmAccountBalancesInner

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getBalance()** | **string** | The number of units of an asset held by this account. <br>Example: `99.9999000` | [optional]
**getLimit()** | **string** | The maximum amount of this asset that this account is willing to accept. Specified when opening a trustline. <br>Example: `99.9999000` | [optional]
**getBuyingLiabilities()** | **string** | The sum of all buy offers owned by this account for this asset. <br>Example: `0.0000000` | [optional]
**getSellingLiabilities()** | **string** | The sum of all sell offers owned by this account for this asset. <br>Example: `0.0000000` | [optional]
**getAssetType()** | **string** | Either native, credit_alphanum4, or credit_alphanum12. <br>Example: `native` | [optional]
**getAssetCode()** | **string** | The code for this asset. <br>Example: `EURT` | [optional]
**getAssetIssuer()** | **string** | The Stellar address of this asset’s issuer. <br>Example: `GBRPYHIL2CI3FNQ4BXLFMNDLFJUNPU2HY3ZMFSHONUCEOASW7QC7OX2H` | [optional]

