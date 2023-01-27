---
title: AdaBlock
parent: Model
layout: page
---

# AdaBlock

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getHash()** | **string** | Hash of block. <br>Example: `6178dda07b94becb118f67b21aa72f60d85c1029e9e9b8ae56a25d684de66078` | [optional]
**getNumber()** | **float** | The number of blocks preceding a particular block on a block chain. <br>Example: `1234314` | [optional]
**getEpochNo()** | **float** | Number of the epoch the block is included in. <br>Example: `536870912` | [optional]
**getSlotNo()** | **float** | Number of the slot the block is included in. <br>Example: `null` | [optional]
**getForgedAt()** | **string** | Time of the block. <br>Example: `2020-10-20T08:21:50.107Z` | [optional]
**getTransactions()** | [**\Tatum\Model\AdaTx[]**](../AdaTx) |  <br>Example: `null` | [optional]

