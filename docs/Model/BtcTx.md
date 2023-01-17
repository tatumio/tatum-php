---
title: BtcTx
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getHash()** | **string** | Transaction hash. | [optional]
**getHex()** | **string** | Transaction hex. | [optional]
**getWitnessHash()** | **string** | Witness hash in case of a SegWit transaction. | [optional]
**getFee()** | **float** | Fee paid for this transaction, in satoshis. | [optional]
**getRate()** | **float** |  | [optional]
**getMtime()** | **float** |  | [optional]
**getBlockNumber()** | **float** | Height of the block this transaction belongs to. | [optional]
**getBlock()** | **string** | Hash of the block this transaction belongs to. | [optional]
**getTime()** | **float** | Time of the transaction. | [optional]
**getIndex()** | **float** | Index of the transaction in the block. | [optional]
**getVersion()** | **float** | Index of the transaction. | [optional]
**getInputs()** | [**\Tatum\Model\BtcTxInput[]**](../BtcTxInput) | List of transactions, from which assets are being sent. | [optional]
**getOutputs()** | [**\Tatum\Model\BtcTxOutput[]**](../BtcTxOutput) | List of recipient addresses and amounts to send to each of them. | [optional]
**getLocktime()** | **float** | Block this transaction was included in. | [optional]

