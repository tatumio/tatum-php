---
title: EgldTx
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getType()** | **string** | Type of transaction. | [optional]
**getNonce()** | **float** | Nonce of the transaction. | [optional]
**getRound()** | **float** | The round number. | [optional]
**getEpoch()** | **float** | An epoch is a sequence of consecutive rounds during which the configuration of the network does not change (currently aprox. 24 hrs in length). | [optional]
**getValue()** | **string** | Transferred value. | [optional]
**getReceiver()** | **string** | Address of the receiver. | [optional]
**getSender()** | **string** | Address of the sender. | [optional]
**getGasPrice()** | **float** | Gas price provided by the sender | [optional]
**getGasLimit()** | **float** | Gas provided by the sender | [optional]
**getData()** | **string** | Data field in transaction. | [optional]
**getSignature()** | **string** | Signature of the transaction. | [optional]
**getSourceShard()** | **float** | Source shard. | [optional]
**getDestinationShard()** | **float** | Destination shard. | [optional]
**getBlockNonce()** | **float** | Nonce of block which contains current transaction. | [optional]
**getBlockHash()** | **string** | Hash of block which contains current transaction. | [optional]
**getMiniblockHash()** | **string** | Miniblock hash. | [optional]
**getTimestamp()** | **float** | The unix timestamp for when the block was collated. | [optional]
**getStatus()** | **string** | Status of the transaction. | [optional]
**getHyperblockNonce()** | **float** | Nonce of the hyperblockwhere this transaction was in. | [optional]
**getHyperblockHash()** | **string** | Hash of the hyperblock where this transaction was in. | [optional]

[[Back to Index]](../index.md)
