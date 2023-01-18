---
title: OneBlock
parent: Model
layout: page
---

# OneBlock model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getDifficulty()** | **string** | Difficulty for this block. | [optional]
**getExtraData()** | **string** | The 'extra data' field of this block. | [optional]
**getGasLimit()** | **float** | The maximum gas allowed in this block. | [optional]
**getGasUsed()** | **float** | The total used gas by all transactions in this block. | [optional]
**getHash()** | **string** | Hash of the block. 'null' when its pending block. | [optional]
**getLogsBloom()** | **string** | The bloom filter for the logs of the block. 'null' when its pending block. | [optional]
**getMiner()** | **string** | The address of the beneficiary to whom the mining rewards were given. | [optional]
**getMixHash()** | **string** |  | [optional]
**getNonce()** | **string** | Hash of the generated proof-of-work. 'null' when its pending block. | [optional]
**getNumber()** | **float** | The block number. 'null' when its pending block. | [optional]
**getParentHash()** | **string** | Hash of the parent block. | [optional]
**getReceiptsRoot()** | **string** |  | [optional]
**getSha3Uncles()** | **string** | SHA3 of the uncles data in the block. | [optional]
**getSize()** | **float** | The size of this block in bytes. | [optional]
**getStateRoot()** | **string** | The root of the final state trie of the block. | [optional]
**getTimestamp()** | **float** | The unix timestamp for when the block was collated. | [optional]
**getTotalDifficulty()** | **string** | Total difficulty of the chain until this block. | [optional]
**getTransactions()** | [**\Tatum\Model\OneTx[]**](../OneTx) | Array of transactions. | [optional]
**getTransactionsRoot()** | **string** | The root of the transaction trie of the block. | [optional]

