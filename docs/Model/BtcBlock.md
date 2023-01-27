---
title: BtcBlock
parent: Model
layout: page
---

# BtcBlock

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getHash()** | **string** | Hash of block. <br>Example: `00000000ca231a439a5c0a86a5a5dd6dc1918a8e897b96522fa9499288e70183` | [optional]
**getHeight()** | **float** | The number of blocks preceding a particular block on a block chain. <br>Example: `15235` | [optional]
**getDepth()** | **float** | The number of blocks following a particular block on a block chain, including current one. <br>Example: `1567867` | [optional]
**getVersion()** | **float** | Block version. <br>Example: `1` | [optional]
**getPrevBlock()** | **string** | Hash of the previous block. <br>Example: `000000006e79360d7b2519410fe5a73e8e08393fd7166620c73c711e4507d9fd` | [optional]
**getMerkleRoot()** | **string** | The root node of a merkle tree, a descendant of all the hashed pairs in the tree. <br>Example: `480c227c5042377dbd54464d33e1f59c19fe02fe76d7f55b6955db438479aece` | [optional]
**getTime()** | **float** | Time of the block. <br>Example: `1338861927` | [optional]
**getBits()** | **float** |  <br>Example: `486604799` | [optional]
**getNonce()** | **float** | Arbitrary number that is used in Bitcoin's proof of work consensus algorithm. <br>Example: `1193572362` | [optional]
**getTxs()** | [**\Tatum\Model\BtcTx[]**](../BtcTx) |  <br>Example: `null` | [optional]

