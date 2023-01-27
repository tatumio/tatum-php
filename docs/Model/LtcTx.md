---
title: LtcTx
parent: Model
layout: page
---

# LtcTx

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getHash()** | **string** | Transaction hash. <br>Example: `5f83d51c8d3054012cea3011fa626b85d89442788721afd60719ab1f9ab8f78a` | [optional]
**getWitnessHash()** | **string** | Witness hash in case of a SegWit transaction. <br>Example: `d819688a3ac77cb6d2751808e5411baf7e20fa3eeeccf65867554a09beddd9a3` | [optional]
**getFee()** | **string** | Fee paid for this transaction, in LTC. <br>Example: `0.00001682` | [optional]
**getRate()** | **string** |  <br>Example: `0.00010011` | [optional]
**getPs()** | **float** |  <br>Example: `1572703011` | [optional]
**getBlockNumber()** | **float** | Height of the block this transaction belongs to. <br>Example: `1233224` | [optional]
**getBlock()** | **string** | Hash of the block this transaction belongs to. <br>Example: `b540bf37450eae0fb9fb7f190009ca890f0dd17cb19521c6241a0dc5e70f67dc` | [optional]
**getTs()** | **float** | Time of the transaction. <br>Example: `1572694484` | [optional]
**getIndex()** | **float** | Index of the transaction in the block. <br>Example: `2` | [optional]
**getVersion()** | **float** | Index of the transaction. <br>Example: `2` | [optional]
**getFlag()** | **float** |  <br>Example: `1` | [optional]
**getInputs()** | [**\Tatum\Model\LtcTxInputsInner[]**](../LtcTxInputsInner) | List of transactions, from which assets are being sent. <br>Example: `null` | [optional]
**getOutputs()** | [**\Tatum\Model\LtcTxOutputsInner[]**](../LtcTxOutputsInner) | List of recipient addresses and amounts to send to each of them. <br>Example: `null` | [optional]
**getLocktime()** | **float** | Block this transaction was included in. <br>Example: `1233222` | [optional]

