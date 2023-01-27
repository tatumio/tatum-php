---
title: CreateXlmAsset
parent: Model
layout: page
---

# CreateXlmAsset

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getIssuerAccount()** | **string** | Blockchain address of the issuer of the assets. <br>Example: `GC5LAVZ5UPLIFDH6SI33PNVL5TKWA4ODXTI3WEF5JM6LRM5MNGVJ56TT` |
**getToken()** | **string** | Asset name. <br>Example: `TOKEN123` |
**getBasePair()** | **string** | Base pair for Asset. Transaction value will be calculated according to this base pair. e.g. 1 TOKEN123 is equal to 1 EUR, if basePair is set to EUR. <br>Example: `EUR` |

