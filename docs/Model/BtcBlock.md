# BtcBlock

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hash** | **string** | Hash of block. | [optional]
**height** | **float** | The number of blocks preceding a particular block on a block chain. | [optional]
**depth** | **float** | The number of blocks following a particular block on a block chain, including current one. | [optional]
**version** | **float** | Block version. | [optional]
**prev_block** | **string** | Hash of the previous block. | [optional]
**merkle_root** | **string** | The root node of a merkle tree, a descendant of all the hashed pairs in the tree. | [optional]
**time** | **float** | Time of the block. | [optional]
**bits** | **float** |  | [optional]
**nonce** | **float** | Arbitrary number that is used in Bitcoin&#39;s proof of work consensus algorithm. | [optional]
**txs** | [**\Tatum\Model\BtcTx[]**](BtcTx.md) |  | [optional]

[[Back to API list]](../../README.md#api-endpoints)
