---
title: EgldBlock
parent: Model
layout: page
---

# EgldBlock

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getNonce()** | **float** | The block height. <br>Example: `5440076` | [optional]
**getRound()** | **float** | The round number. <br>Example: `186582` | [optional]
**getHash()** | **string** | Hash of the block. <br>Example: `bd2de3618929b696807f6ef8a619f93d29d639aec9277f9c6f8569a8487141b1` | [optional]
**getPrevBlockHash()** | **string** | Hash of the previous block. <br>Example: `2a11aad21e933be58200839ff875f0ca7e955b8c483a0e117cb92409e5d2a5da` | [optional]
**getEpoch()** | **float** | An epoch is a sequence of consecutive rounds during which the configuration of the network does not change (currently aprox. 24 hrs in length). <br>Example: `18` | [optional]
**getNumTxs()** | **float** | Number of transactions in current block. <br>Example: `8` | [optional]
**getShardBlocks()** | [**\Tatum\Model\EgldShardBlock[]**](../EgldShardBlock) | Array of shard blocks <br>Example: `null` | [optional]
**getTransactions()** | [**\Tatum\Model\EgldTx[]**](../EgldTx) | Array of transactions. <br>Example: `null` | [optional]

