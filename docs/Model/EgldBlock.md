# EgldBlock

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getNonce()** | **float** | The block height. | [optional]
**getRound()** | **float** | The round number. | [optional]
**getHash()** | **string** | Hash of the block. | [optional]
**getPrevBlockHash()** | **string** | Hash of the previous block. | [optional]
**getEpoch()** | **float** | An epoch is a sequence of consecutive rounds during which the configuration of the network does not change (currently aprox. 24 hrs in length). | [optional]
**getNumTxs()** | **float** | Number of transactions in current block. | [optional]
**getShardBlocks()** | [**\Tatum\Model\EgldShardBlock[]**](EgldShardBlock.md) | Array of shard blocks | [optional]
**getTransactions()** | [**\Tatum\Model\EgldTx[]**](EgldTx.md) | Array of transactions. | [optional]

[[Back to Index]](../index.md)
