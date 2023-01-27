---
title: VetTxReceipt
parent: Model
layout: page
---

# VetTxReceipt

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getGasUsed()** | **float** |  | ex.: `21000` [optional]
**getGasPayer()** | **string** |  | ex.: `0x5034aa590125b64023a0262112b98d72e3c8e40e` [optional]
**getPaid()** | **string** |  | ex.: `0x1ac942860d7100728` [optional]
**getReward()** | **string** |  | ex.: `0x8092d8e9da1e688c` [optional]
**getReverted()** | **bool** |  | ex.: `false` [optional]
**getMeta()** | [**\Tatum\Model\VetTxReceiptMeta**](../VetTxReceiptMeta) |  | ex.: `null` [optional]
**getOutputs()** | [**\Tatum\Model\VetTxReceiptOutputsInner[]**](../VetTxReceiptOutputsInner) | List of recipient addresses and amounts to send to each of them. | ex.: `null` [optional]
**getBlockNumber()** | **float** |  | ex.: `1162169` [optional]
**getBlockHash()** | **string** |  | ex.: `0x0011bbb9925da1b54035e2a870abe336bc79a3b083303646b87a3315c11c963b` [optional]
**getTransactionHash()** | **string** |  | ex.: `0x24f691abab680972437028af22bc7a43c3fbe8d6d7eefc420dea2daf554758a7` [optional]
**getStatus()** | **string** |  | ex.: `0x1` [optional]

