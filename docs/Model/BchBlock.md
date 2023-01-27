---
title: BchBlock
parent: Model
layout: page
---

# BchBlock

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getHash()** | **string** | Hash of block. | ex.: `000000000000000005e14d3f9fdfb70745308706615cfa9edca4f4558332b201` [optional]
**getSize()** | **float** | Block size. | ex.: `81577` [optional]
**getHeight()** | **float** | The number of blocks preceding a particular block on a block chain. | ex.: `500000` [optional]
**getVersion()** | **float** | Block version. | ex.: `536870912` [optional]
**getMerkleroot()** | **string** | The root node of a merkle tree, a descendant of all the hashed pairs in the tree. | ex.: `4af279645e1b337e655ae3286fc2ca09f58eb01efa6ab27adedd1e9e6ec19091` [optional]
**getTx()** | [**\Tatum\Model\BchTx[]**](../BchTx) | List of transactions present in the block. | ex.: `null` [optional]
**getTime()** | **float** | Time of the block. | ex.: `1509343584` [optional]
**getNonce()** | **float** | Arbitrary number that is used in Bitcoin's proof of work consensus algorithm. | ex.: `3604508752` [optional]
**getDifficulty()** | **float** |  | ex.: `113081236211.45331` [optional]
**getConfirmations()** | **float** | Number of blocks mined after this block. | ex.: `109602` [optional]
**getPreviousblockhash()** | **string** | Hash of the previous block. | ex.: `0000000000000000043831d6ebb013716f0580287ee5e5687e27d0ed72e6e523` [optional]
**getNextblockhash()** | **string** | Hash of the next block. | ex.: `00000000000000000568f0a96bf4348847bc84e455cbfec389f27311037a20f3` [optional]

