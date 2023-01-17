---
title: VetTxReceipt
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getGasUsed()** | **float** |  | [optional]
**getGasPayer()** | **string** |  | [optional]
**getPaid()** | **string** |  | [optional]
**getReward()** | **string** |  | [optional]
**getReverted()** | **bool** |  | [optional]
**getMeta()** | [**\Tatum\Model\VetTxReceiptMeta**](../VetTxReceiptMeta) |  | [optional]
**getOutputs()** | [**\Tatum\Model\VetTxReceiptOutputsInner[]**](../VetTxReceiptOutputsInner) | List of recipient addresses and amounts to send to each of them. | [optional]
**getBlockNumber()** | **float** |  | [optional]
**getBlockHash()** | **string** |  | [optional]
**getTransactionHash()** | **string** |  | [optional]
**getStatus()** | **string** |  | [optional]

