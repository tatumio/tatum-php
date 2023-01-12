# VetBlock

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getNumber()** | **int** | block number (height) | [optional]
**getId()** | **string** | block identifier | [optional]
**getSize()** | **int** | RLP encoded block size in bytes | [optional]
**getParentId()** | **string** | parent block ID | [optional]
**getTimestamp()** | **int** | block unix timestamp | [optional]
**getGasLimit()** | **int** | block gas limit (max allowed accumulative gas usage of transactions) | [optional]
**getBeneficiary()** | **string** | Address of account to receive block reward | [optional]
**getGasUsed()** | **int** | accumulative gas usage of transactions | [optional]
**getTotalScore()** | **int** | sum of all ancestral blocks' score | [optional]
**getTxsRoot()** | **string** | root hash of transactions in the block | [optional]
**getTxsFeatures()** | **int** | supported txs features bitset | [optional]
**getStateRoot()** | **string** | root hash of accounts state | [optional]
**getReceiptsRoot()** | **string** | root hash of transaction receipts | [optional]
**getSigner()** | **string** | the one who signed this block | [optional]
**getTransactions()** | **string[]** | transactions IDs | [optional]

[[Back to Index]](../index.md)
