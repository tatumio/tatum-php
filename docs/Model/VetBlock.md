# VetBlock

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number** | **int** | block number (height) | [optional]
**id** | **string** | block identifier | [optional]
**size** | **int** | RLP encoded block size in bytes | [optional]
**parent_id** | **string** | parent block ID | [optional]
**timestamp** | **int** | block unix timestamp | [optional]
**gas_limit** | **int** | block gas limit (max allowed accumulative gas usage of transactions) | [optional]
**beneficiary** | **string** | Address of account to receive block reward | [optional]
**gas_used** | **int** | accumulative gas usage of transactions | [optional]
**total_score** | **int** | sum of all ancestral blocks&#39; score | [optional]
**txs_root** | **string** | root hash of transactions in the block | [optional]
**txs_features** | **int** | supported txs features bitset | [optional]
**state_root** | **string** | root hash of accounts state | [optional]
**receipts_root** | **string** | root hash of transaction receipts | [optional]
**signer** | **string** | the one who signed this block | [optional]
**transactions** | **string[]** | transactions IDs | [optional]

[[Back to API list]](../../README.md#api-endpoints)
