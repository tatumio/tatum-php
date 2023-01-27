---
title: TronTx
parent: Model
layout: page
---

# TronTx

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getRet()** | [**\Tatum\Model\TronTxRetInner[]**](../TronTxRetInner) | Result of the smart contract invocation. <br>Example: `null` |
**getSignature()** | **string[]** | List of signatures of the transaction. <br>Example: `null` |
**getBlockNumber()** | **float** | The block in which the transaction was included. <br>Example: `11223344` |
**getTxId()** | **string** | Transaction ID. <br>Example: `24dd2f121a24516f22df78adf1ccc32119e3edb7760297f76a925b879f2baa98` |
**getNetUsage()** | **float** | Usage of the network. <br>Example: `0` | [optional]
**getRawData()** | [**\Tatum\Model\TronTxRawData**](../TronTxRawData) |  <br>Example: `null` |

