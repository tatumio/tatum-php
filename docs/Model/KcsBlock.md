# KcsBlock

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**difficulty** | **string** | Difficulty for this block. | [optional]
**extra_data** | **string** | The &#39;extra data&#39; field of this block. | [optional]
**gas_limit** | **float** | The maximum gas allowed in this block. | [optional]
**gas_used** | **float** | The total used gas by all transactions in this block. | [optional]
**hash** | **string** | Hash of the block. &#39;null&#39; when its pending block. | [optional]
**logs_bloom** | **string** | The bloom filter for the logs of the block. &#39;null&#39; when its pending block. | [optional]
**miner** | **string** | The address of the beneficiary to whom the mining rewards were given. | [optional]
**mix_hash** | **string** |  | [optional]
**nonce** | **string** | Hash of the generated proof-of-work. &#39;null&#39; when its pending block. | [optional]
**number** | **float** | The block number. &#39;null&#39; when its pending block. | [optional]
**parent_hash** | **string** | Hash of the parent block. | [optional]
**receipts_root** | **string** |  | [optional]
**sha3_uncles** | **string** | SHA3 of the uncles data in the block. | [optional]
**size** | **float** | The size of this block in bytes. | [optional]
**state_root** | **string** | The root of the final state trie of the block. | [optional]
**timestamp** | **float** | The unix timestamp for when the block was collated. | [optional]
**total_difficulty** | **string** | Total difficulty of the chain until this block. | [optional]
**transactions** | [**\Tatum\Model\KcsTx[]**](KcsTx.md) | Array of transactions. | [optional]
**transactions_root** | **string** | The root of the transaction trie of the block. | [optional]

[[Back to API list]](../../README.md#api-endpoints)
