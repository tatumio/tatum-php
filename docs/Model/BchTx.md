---
title: BchTx
parent: Model
layout: page
---

# BchTx

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getTxid()** | **string** |  | ex.: `fe28050b93faea61fa88c4c630f0e1f0a1c24d0082dd0e10d369e13212128f33` [optional]
**getVersion()** | **float** |  | ex.: `1` [optional]
**getLocktime()** | **float** |  | ex.: `0` [optional]
**getVin()** | [**\Tatum\Model\BchTxVinInner[]**](../BchTxVinInner) |  | ex.: `null` [optional]
**getVout()** | [**\Tatum\Model\BchTxVoutInner[]**](../BchTxVoutInner) |  | ex.: `null` [optional]

