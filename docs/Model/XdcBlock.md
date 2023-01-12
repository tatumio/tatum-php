# XdcBlock

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getNumber()** | **float** | The block number. 'null' when its pending block. | [optional]
**getHash()** | **string** | Hash of the block. 'null' when its pending block. | [optional]
**getParentHash()** | **string** | Hash of the parent block. | [optional]
**getNonce()** | **string** | Hash of the generated proof-of-work. 'null' when its pending block. | [optional]
**getSha3Uncles()** | **string** | SHA3 of the uncles data in the block. | [optional]
**getLogsBloom()** | **string** | The bloom filter for the logs of the block. 'null' when its pending block. | [optional]
**getTransactionsRoot()** | **string** | The root of the transaction trie of the block. | [optional]
**getStateRoot()** | **string** | The root of the final state trie of the block. | [optional]
**getReceiptsRoot()** | **string** | The root of the transaction trie of the block. | [optional]
**getMiner()** | **string** | The address of the beneficiary to whom the mining rewards were given. | [optional]
**getDifficulty()** | **string** | Difficulty for this block. | [optional]
**getTotalDifficulty()** | **string** | Total difficulty of the chain until this block. | [optional]
**getExtraData()** | **string** | The 'extra data' field of this block. | [optional]
**getSize()** | **float** | The size of this block in bytes. | [optional]
**getGasLimit()** | **float** | The maximum gas allowed in this block. | [optional]
**getGasUsed()** | **float** | The total used gas by all transactions in this block. | [optional]
**getTimestamp()** | **float** | The unix timestamp for when the block was collated. | [optional]
**getTransactions()** | [**\Tatum\Model\XdcTx[]**](XdcTx.md) | Array of transactions. | [optional]
**getUncles()** | **string[]** | Array of uncle hashes. | [optional]

[[Back to Index]](../index.md)
