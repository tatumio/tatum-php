---
title: DogeUTXO
parent: Model
layout: page
---

# DogeUTXO

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getScriptPubKey()** | [**\Tatum\Model\DogeTxVoutInnerScriptPubKey**](../DogeTxVoutInnerScriptPubKey) |  | ex.: `null` [optional]
**getVersion()** | **float** | The version of the transaction | ex.: `2` [optional]
**getHeight()** | **float** | The height (number) of the block where the transaction is included in | ex.: `1233224` [optional]
**getValue()** | **float** | The amount of the UTXO (in 1/1000000 DOGE) | ex.: `1000` [optional]
**getCoinbase()** | **bool** | If set to "true", the transaction is a coinbase transaction (a transaction created by a Bitcoin miner to collect their reward) | ex.: `false` [optional]
**getBestblock()** | **string** | The block hash | ex.: `5f83d51c8d3054012cea3011fa626b85d89442788721afd60719ab1f9ab8f78a` [optional]

