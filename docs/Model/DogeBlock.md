---
title: DogeBlock
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getHash()** | **string** | Hash of block. | [optional]
**getHeight()** | **float** | The number of blocks preceding a particular block on a block chain. | [optional]
**getSize()** | **float** | The size of the block. | [optional]
**getConfirmations()** | **float** | Number of confirmations of that block. | [optional]
**getWeight()** | **float** | The weight of the block. | [optional]
**getVersion()** | **float** | Block version. | [optional]
**getPreviousblockhash()** | **string** | Hash of the previous block. | [optional]
**getMerkleRoot()** | **string** | The root node of a merkle tree, a descendant of all the hashed pairs in the tree. | [optional]
**getTime()** | **float** | Time of the block. | [optional]
**getBits()** | **float** |  | [optional]
**getNonce()** | **float** | Arbitrary number that is used in Litecoin's proof of work consensus algorithm. | [optional]
**getTxs()** | [**\Tatum\Model\DogeTx[]**](../DogeTx) |  | [optional]

