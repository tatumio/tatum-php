# BchBlock

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hash** | **string** | Hash of block. | [optional]
**size** | **float** | Block size. | [optional]
**height** | **float** | The number of blocks preceding a particular block on a block chain. | [optional]
**version** | **float** | Block version. | [optional]
**merkleroot** | **string** | The root node of a merkle tree, a descendant of all the hashed pairs in the tree. | [optional]
**tx** | [**\Tatum\Model\BchTx[]**](BchTx.md) | List of transactions present in the block. | [optional]
**time** | **float** | Time of the block. | [optional]
**nonce** | **float** | Arbitrary number that is used in Bitcoin's proof of work consensus algorithm. | [optional]
**difficulty** | **float** |  | [optional]
**confirmations** | **float** | Number of blocks mined after this block. | [optional]
**previousblockhash** | **string** | Hash of the previous block. | [optional]
**nextblockhash** | **string** | Hash of the next block. | [optional]

[[Back to Index]](../index.md)
