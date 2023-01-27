---
title: ResponseData
parent: Model
layout: page
---

# ResponseData

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAddress()** | [**\Tatum\Model\Address**](../Address) |  <br>Example: `null` | [optional]
**getAmount()** | **float** | Amount of unprocessed transaction outputs, that can be used for withdrawal. Bitcoin, Litecoin, Bitcoin Cash only. <br>Example: `null` | [optional]
**getVIn()** | **string** | Last used unprocessed transaction output, that can be used. Bitcoin, Litecoin, Bitcoin Cash only. If -1, it indicates prepared vOut with amount to be transferred to pool address. <br>Example: `null` | [optional]
**getVInIndex()** | **int** | Index of last used unprocessed transaction output in raw transaction, that can be used. Bitcoin, Litecoin, Bitcoin Cash only. <br>Example: `null` | [optional]
**getScriptPubKey()** | **string** | Script of last unprocessed UTXO. Bitcoin SV only. <br>Example: `null` | [optional]

