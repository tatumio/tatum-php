---
title: TronBlock
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getHash()** | **string** | Block hash | [optional]
**getBlockNumber()** | **float** | Block number. | [optional]
**getTimestamp()** | **float** | Time of the block in UTC millis. | [optional]
**getParentHash()** | **string** | Hash of the parent block. | [optional]
**getWitnessAddress()** | **string** | Witness address. | [optional]
**getWitnessSignature()** | **string** | Witness signature. | [optional]
**getTransactions()** | [**\Tatum\Model\TronTx[]**](../TronTx) | Transactions that occurs in this block. | [optional]

