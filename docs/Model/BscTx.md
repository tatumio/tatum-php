---
title: BscTx
parent: Model
layout: page
---

# BscTx

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getBlockHash()** | **string** | Hash of the block where this transaction was in. <br>Example: `0xcf2c40f475e78c7c19778e1ae999a0e371c9319b38182ea15dc94536f13f9137` | [optional]
**getStatus()** | **bool** | TRUE if the transaction was successful, FALSE, if the EVM reverted the transaction. <br>Example: `true` | [optional]
**getBlockNumber()** | **mixed** | The number of the block that the transaction is included in; if not returned, the transaction has not been included in a block yet. <br>Example: `6470854` | [optional]
**getFrom()** | **string** | Address of the sender. <br>Example: `0x81b7E08F65Bdf5648606c89998A9CC8164397647` | [optional]
**getGas()** | **float** | Gas provided by the sender. <br>Example: `21000` | [optional]
**getGasPrice()** | **string** | Gas price provided by the sender in wei. <br>Example: `1000000000` | [optional]
**getTransactionHash()** | **string** | Hash of the transaction. <br>Example: `0xe6e7340394958674cdf8606936d292f565e4ecc476aaa8b258ec8a141f7c75d7` | [optional]
**getInput()** | **string** | The data sent along with the transaction. <br>Example: `0x` | [optional]
**getNonce()** | **float** | The number of transactions made by the sender prior to this one. <br>Example: `26836405` | [optional]
**getTo()** | **string** | Address of the receiver. 'null' when its a contract creation transaction. <br>Example: `0xbC546fa1716Ed886967cf73f40e8F2F5e623a92d` | [optional]
**getTransactionIndex()** | **mixed** | The integer of the transactions index position in the block; if not returned, the transaction has not been included in a block yet. <br>Example: `3` | [optional]
**getValue()** | **string** | Value transferred in wei. <br>Example: `1000000000000000000` | [optional]
**getGasUsed()** | **mixed** | The amount of gas used by this specific transaction alone; if not returned, the transaction has not been included in a block yet. <br>Example: `21000` | [optional]
**getCumulativeGasUsed()** | **mixed** | The total amount of gas used when this transaction was executed in the block; if not returned, the transaction has not been included in a block yet. <br>Example: `314159` | [optional]
**getContractAddress()** | **string** | The contract address created, if the transaction was a contract creation, otherwise null. <br>Example: `0x81b7E08F65Bdf5648606c89998A9CC8164397647` | [optional]
**getLogs()** | [**\Tatum\Model\BscTxLog[]**](../BscTxLog) | Log events, that happened in this transaction. <br>Example: `null` | [optional]

