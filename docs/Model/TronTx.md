---
title: TronTx
parent: Model
layout: page
---

# TronTx

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getRet()** | [**\Tatum\Model\TronTxRetInner[]**](../TronTxRetInner) | Result of the smart contract invocation. | ex.: `null`
**getSignature()** | **string[]** | List of signatures of the transaction. | ex.: `null`
**getBlockNumber()** | **float** | The block in which the transaction was included. | ex.: `11223344`
**getTxId()** | **string** | Transaction ID. | ex.: `24dd2f121a24516f22df78adf1ccc32119e3edb7760297f76a925b879f2baa98`
**getNetUsage()** | **float** | Usage of the network. | ex.: `0` [optional]
**getRawData()** | [**\Tatum\Model\TronTxRawData**](../TronTxRawData) |  | ex.: `null`

