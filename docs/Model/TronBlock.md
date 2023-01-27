---
title: TronBlock
parent: Model
layout: page
---

# TronBlock

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getHash()** | **string** | Block hash <br>Example: `000000000195a8cfe2ea4ca60ce921b30e95980a96c6bb1da4a35aa03da9c5a8` | [optional]
**getBlockNumber()** | **float** | Block number. <br>Example: `26585295` | [optional]
**getTimestamp()** | **float** | Time of the block in UTC millis. <br>Example: `1610134209000` | [optional]
**getParentHash()** | **string** | Hash of the parent block. <br>Example: `000000000195a8ce6003aa8b6443c52734b80aefdcd079bf40e7f165b046370e` | [optional]
**getWitnessAddress()** | **string** | Witness address. <br>Example: `4118e2e1c6cdf4b74b7c1eb84682e503213a174955` | [optional]
**getWitnessSignature()** | **string** | Witness signature. <br>Example: `e20cb7a1f01d279ebe9c20baa0d747bea160042639ba0be63460cbb21ae63f072520e7766cb7aa1bd4e74bebbdea64be431ecf52c2aa2123ca0b1d7495bd581d00` | [optional]
**getTransactions()** | [**\Tatum\Model\TronTx[]**](../TronTx) | Transactions that occurs in this block. <br>Example: `null` | [optional]

