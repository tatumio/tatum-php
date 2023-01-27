---
title: TrustLineXlmBlockchainKMS
parent: Model
layout: page
---

# TrustLineXlmBlockchainKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFromAccount()** | **string** | XLM account address. Must be the one used for generating deposit tags. <br>Example: `GBRPYHIL2CI3FNQ4BXLFMNDLFJUNPU2HY3ZMFSHONUCEOASW7QC7OX2H` |
**getIssuerAccount()** | **string** | Blockchain address of the issuer of the assets to create trust line for. <br>Example: `GC5LAVZ5UPLIFDH6SI33PNVL5TKWA4ODXTI3WEF5JM6LRM5MNGVJ56TT` |
**getToken()** | **string** | Asset name. <br>Example: `TOKEN123` |
**getSignatureId()** | **string** | Identifier of the secret associated in signing application. Secret, or signature Id must be present. <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |
**getLimit()** | **string** | Amount of the assets to be permitted to send over this trust line. 0 means deletion of the trust line. When no limit is specified, maximum amount available is permitted. <br>Example: `10000` | [optional]

