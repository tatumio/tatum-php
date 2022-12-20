# EgldBlock

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**nonce** | **float** | The block height. | [optional]
**round** | **float** | The round number. | [optional]
**hash** | **string** | Hash of the block. | [optional]
**prev_block_hash** | **string** | Hash of the previous block. | [optional]
**epoch** | **float** | An epoch is a sequence of consecutive rounds during which the configuration of the network does not change (currently aprox. 24 hrs in length). | [optional]
**num_txs** | **float** | Number of transactions in current block. | [optional]
**shard_blocks** | [**\Tatum\Model\EgldShardBlock[]**](EgldShardBlock.md) | Array of shard blocks | [optional]
**transactions** | [**\Tatum\Model\EgldTx[]**](EgldTx.md) | Array of transactions. | [optional]

[[Back to Index]](../index.md)
