# Model/BchBlock

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getHash()** | **string** | Hash of block. | [optional]
**getSize()** | **float** | Block size. | [optional]
**getHeight()** | **float** | The number of blocks preceding a particular block on a block chain. | [optional]
**getVersion()** | **float** | Block version. | [optional]
**getMerkleroot()** | **string** | The root node of a merkle tree, a descendant of all the hashed pairs in the tree. | [optional]
**getTx()** | [**\Tatum\Model\BchTx[]**](BchTx.md) | List of transactions present in the block. | [optional]
**getTime()** | **float** | Time of the block. | [optional]
**getNonce()** | **float** | Arbitrary number that is used in Bitcoin's proof of work consensus algorithm. | [optional]
**getDifficulty()** | **float** |  | [optional]
**getConfirmations()** | **float** | Number of blocks mined after this block. | [optional]
**getPreviousblockhash()** | **string** | Hash of the previous block. | [optional]
**getNextblockhash()** | **string** | Hash of the next block. | [optional]

[[Back to Index]](../index.md)
