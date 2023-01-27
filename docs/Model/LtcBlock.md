---
title: LtcBlock
parent: Model
layout: page
---

# LtcBlock

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getHash()** | **string** | Hash of block. <br>Example: `6178dda07b94becb118f67b21aa72f60d85c1029e9e9b8ae56a25d684de66078` | [optional]
**getBlockNumber()** | **float** | The number of blocks preceding a particular block on a block chain. <br>Example: `1234314` | [optional]
**getVersion()** | **float** | Block version. <br>Example: `536870912` | [optional]
**getPrevBlock()** | **string** | Hash of the previous block. <br>Example: `a3047a060e5d586a9b26779ebe62fc57ce7323745da8f28761ab755454d89c52` | [optional]
**getMerkleRoot()** | **string** | The root node of a merkle tree, a descendant of all the hashed pairs in the tree. <br>Example: `a1634a42a8e956a5fb5225d06c3af6207e7f6fe5a00fa45229edfd0ddfa587f0` | [optional]
**getTime()** | **float** | Time of the block. <br>Example: `1572865501` | [optional]
**getBits()** | **float** |  <br>Example: `503452237` | [optional]
**getNonce()** | **float** | Arbitrary number that is used in Litecoin's proof of work consensus algorithm. <br>Example: `2278594841` | [optional]
**getTxs()** | [**\Tatum\Model\LtcTx[]**](../LtcTx) |  <br>Example: `null` | [optional]

