# XdcBlock

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number** | **float** | The block number. 'null' when its pending block. | [optional]
**hash** | **string** | Hash of the block. 'null' when its pending block. | [optional]
**parent_hash** | **string** | Hash of the parent block. | [optional]
**nonce** | **string** | Hash of the generated proof-of-work. 'null' when its pending block. | [optional]
**sha3_uncles** | **string** | SHA3 of the uncles data in the block. | [optional]
**logs_bloom** | **string** | The bloom filter for the logs of the block. 'null' when its pending block. | [optional]
**transactions_root** | **string** | The root of the transaction trie of the block. | [optional]
**state_root** | **string** | The root of the final state trie of the block. | [optional]
**receipts_root** | **string** | The root of the transaction trie of the block. | [optional]
**miner** | **string** | The address of the beneficiary to whom the mining rewards were given. | [optional]
**difficulty** | **string** | Difficulty for this block. | [optional]
**total_difficulty** | **string** | Total difficulty of the chain until this block. | [optional]
**extra_data** | **string** | The 'extra data' field of this block. | [optional]
**size** | **float** | The size of this block in bytes. | [optional]
**gas_limit** | **float** | The maximum gas allowed in this block. | [optional]
**gas_used** | **float** | The total used gas by all transactions in this block. | [optional]
**timestamp** | **float** | The unix timestamp for when the block was collated. | [optional]
**transactions** | [**\Tatum\Model\XdcTx[]**](XdcTx.md) | Array of transactions. | [optional]
**uncles** | **string[]** | Array of uncle hashes. | [optional]

[[Back to Index]](../index.md)
