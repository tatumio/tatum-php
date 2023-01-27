---
title: CeloTxLogsInner
parent: Model
layout: page
---

# CeloTxLogsInner

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAddress()** | **string** | From which this event originated from. <br>Example: `0x81b7E08F65Bdf5648606c89998A9CC8164397647` | [optional]
**getTopics()** | **string[]** | An array with max 4 32 Byte topics, topic 1-3 contains indexed parameters of the log. <br>Example: `null` | [optional]
**getData()** | **string** | The data containing non-indexed log parameter. <br>Example: `null` | [optional]
**getLogIndex()** | **float** | Integer of the event index position in the block. <br>Example: `null` | [optional]
**getTransactionIndex()** | **float** | Integer of the transaction’s index position, the event was created in. <br>Example: `null` | [optional]
**getTransactionHash()** | **string** | Hash of the transaction this event was created in. <br>Example: `0xe6e7340394958674cdf8606936d292f565e4ecc476aaa8b258ec8a141f7c75d7` | [optional]

