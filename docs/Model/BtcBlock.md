# BtcBlock

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getHash()** | **string** | Hash of block. | [optional]
**getHeight()** | **float** | The number of blocks preceding a particular block on a block chain. | [optional]
**getDepth()** | **float** | The number of blocks following a particular block on a block chain, including current one. | [optional]
**getVersion()** | **float** | Block version. | [optional]
**getPrevBlock()** | **string** | Hash of the previous block. | [optional]
**getMerkleRoot()** | **string** | The root node of a merkle tree, a descendant of all the hashed pairs in the tree. | [optional]
**getTime()** | **float** | Time of the block. | [optional]
**getBits()** | **float** |  | [optional]
**getNonce()** | **float** | Arbitrary number that is used in Bitcoin's proof of work consensus algorithm. | [optional]
**getTxs()** | [**\Tatum\Model\BtcTx[]**](BtcTx.md) |  | [optional]

[[Back to Index]](../index.md)
