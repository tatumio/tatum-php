# LtcBlock

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hash** | **string** | Hash of block. | [optional]
**block_number** | **float** | The number of blocks preceding a particular block on a block chain. | [optional]
**version** | **float** | Block version. | [optional]
**prev_block** | **string** | Hash of the previous block. | [optional]
**merkle_root** | **string** | The root node of a merkle tree, a descendant of all the hashed pairs in the tree. | [optional]
**time** | **float** | Time of the block. | [optional]
**bits** | **float** |  | [optional]
**nonce** | **float** | Arbitrary number that is used in Litecoin&#39;s proof of work consensus algorithm. | [optional]
**txs** | [**\Tatum\Model\LtcTx[]**](LtcTx.md) |  | [optional]

[[Back to Index]](../index.md)
