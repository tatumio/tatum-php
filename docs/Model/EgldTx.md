---
title: EgldTx
parent: Model
layout: page
---

# EgldTx

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getType()** | **string** | Type of transaction. <br>Example: `null` | [optional]
**getNonce()** | **float** | Nonce of the transaction. <br>Example: `2` | [optional]
**getRound()** | **float** | The round number. <br>Example: `186580` | [optional]
**getEpoch()** | **float** | An epoch is a sequence of consecutive rounds during which the configuration of the network does not change (currently aprox. 24 hrs in length). <br>Example: `12` | [optional]
**getValue()** | **string** | Transferred value. <br>Example: `1000000000000000000` | [optional]
**getReceiver()** | **string** | Address of the receiver. <br>Example: `erd17k95m339aqzxzyvjjjfa3lka0yyeqgcsda50tw5z9g73ycfe2caq9e6jq7` | [optional]
**getSender()** | **string** | Address of the sender. <br>Example: `erd17k95m339aqzxzyvjjjfa3lka0yyeqgcsda50tw5z9g73ycfe2caq9e6jq1` | [optional]
**getGasPrice()** | **float** | Gas price provided by the sender <br>Example: `1000000000` | [optional]
**getGasLimit()** | **float** | Gas provided by the sender <br>Example: `70000` | [optional]
**getData()** | **string** | Data field in transaction. <br>Example: `Zm9yIHRlc3Rz` | [optional]
**getSignature()** | **string** | Signature of the transaction. <br>Example: `c6ab10b401f14b122caf9d2ef80d532b986aa82b589dac77d77929da27ae2382c6ab10b401f14b122caf9d2ef80d532b986aa82b589dac77d77929da27ae238` | [optional]
**getSourceShard()** | **float** | Source shard. <br>Example: `2` | [optional]
**getDestinationShard()** | **float** | Destination shard. <br>Example: `1` | [optional]
**getBlockNonce()** | **float** | Nonce of block which contains current transaction. <br>Example: `186535` | [optional]
**getBlockHash()** | **string** | Hash of block which contains current transaction. <br>Example: `bd2de3618929b696807f6ef8a619f93d29d639aec9277f9c6f8569a8487141b1` | [optional]
**getMiniblockHash()** | **string** | Miniblock hash. <br>Example: `7cb0a10cf9e9ec9ff719ffe99349db3feac3ec217b6de62f6cf7756647194bbf` | [optional]
**getTimestamp()** | **float** | The unix timestamp for when the block was collated. <br>Example: `1569600592` | [optional]
**getStatus()** | **string** | Status of the transaction. <br>Example: `Success` | [optional]
**getHyperblockNonce()** | **float** | Nonce of the hyperblockwhere this transaction was in. <br>Example: `123321` | [optional]
**getHyperblockHash()** | **string** | Hash of the hyperblock where this transaction was in. <br>Example: `715224f1f7d8330e3837500d1f82431954e30db6149f3ee4644d0950576d8dfe` | [optional]

