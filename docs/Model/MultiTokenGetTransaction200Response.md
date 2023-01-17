---
title: MultiTokenGetTransaction200Response
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getBlockHash()** | **string** | Hash of the block where this transaction was in. | [optional]
**getStatus()** | **bool** | TRUE if the transaction was successful, FALSE, if the EVM reverted the transaction. | [optional]
**getBlockNumber()** | **mixed** | Block number where this transaction was in. | [optional]
**getFrom()** | **string** | Address of the sender. | [optional]
**getGas()** | **float** | Gas provided by the sender. | [optional]
**getGasPrice()** | **string** | Gas price provided by the sender in wei. | [optional]
**getTransactionHash()** | **string** | Hash of the transaction. | [optional]
**getInput()** | **string** | The data sent along with the transaction. | [optional]
**getNonce()** | **float** | The number of transactions made by the sender prior to this one. | [optional]
**getTo()** | **string** | Address of the receiver. 'null' when its a contract creation transaction. | [optional]
**getTransactionIndex()** | **mixed** | Integer of the transactions index position in the block. | [optional]
**getValue()** | **string** | Value transferred in wei. | [optional]
**getGasUsed()** | **mixed** | The amount of gas used by this specific transaction alone. | [optional]
**getCumulativeGasUsed()** | **mixed** | The total amount of gas used when this transaction was executed in the block. | [optional]
**getContractAddress()** | **string** | The contract address created, if the transaction was a contract creation, otherwise null. | [optional]
**getLogs()** | [**\Tatum\Model\EthTxLog[]**](../EthTxLog) | Log events, that happened in this transaction. | [optional]

