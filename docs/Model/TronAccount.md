---
title: TronAccount
parent: Model
layout: page
---

# TronAccount

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAddress()** | **string** | Account address | ex.: `TGDqQAP5bduoPKVgdbk7fGyW4DwEt3RRn8`
**getBalance()** | **float** | Balance of the TRX, in SUN. SUN is 1/1000000 TRX. | ex.: `2342342`
**getTrc10()** | [**\Tatum\Model\TronAccountTrc10Inner[]**](../TronAccountTrc10Inner) |  | ex.: `null`
**getTrc20()** | **object[]** |  | ex.: `null`
**getCreateTime()** | **float** | Date of creation of the account in UTC millis. | ex.: `1602848895000`
**getAssetIssuedId()** | **string** | ID of the issued TRC10 token, if any. | ex.: `1003475` [optional]
**getAssetIssuedName()** | **float** | Balance of the issued TRC10 token, if any. | ex.: `100` [optional]
**getFreeNetUsage()** | **float** | Free usage of the network. | ex.: `1000`
**getFreeNetLimit()** | **float** | Free usage limit of the network. | ex.: `1500` [optional]
**getNetUsage()** | **float** | Extra usage of the network. | ex.: `5000` [optional]
**getNetLimit()** | **float** | Extra usage limit of the network. | ex.: `5000` [optional]
**getBandwidth()** | **float** | Remaining usage of the network, equal to freeNetLimit - freeNetUsed + netLimit - netUsed. | ex.: `1500`

