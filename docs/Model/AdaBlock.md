---
title: AdaBlock
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getHash()** | **string** | Hash of block. | [optional]
**getNumber()** | **float** | The number of blocks preceding a particular block on a block chain. | [optional]
**getEpochNo()** | **float** | Number of the epoch the block is included in. | [optional]
**getSlotNo()** | **float** | Number of the slot the block is included in. | [optional]
**getForgedAt()** | **string** | Time of the block. | [optional]
**getTransactions()** | [**\Tatum\Model\AdaTx[]**](AdaTx.md) |  | [optional]

[[Back to Index]](../index.md)
