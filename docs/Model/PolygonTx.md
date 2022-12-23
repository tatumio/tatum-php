# PolygonTx

## Getters

Method | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getBlockHash()** | **string** | Hash of the block where this transaction was in. | [optional]
**getStatus()** | **bool** | TRUE if the transaction was successful, FALSE, if the EVM reverted the transaction. | [optional]
**getBlockNumber()** | **mixed** | The number of the block that the transaction is included in; if not returned, the transaction has not been included in a block yet. | [optional]
**getFrom()** | **string** | Address of the sender. | [optional]
**getGas()** | **float** | Gas provided by the sender. | [optional]
**getGasPrice()** | **string** | Gas price provided by the sender in wei. | [optional]
**getTransactionHash()** | **string** | Hash of the transaction. | [optional]
**getInput()** | **string** | The data sent along with the transaction. | [optional]
**getNonce()** | **float** | The number of transactions made by the sender prior to this one. | [optional]
**getTo()** | **string** | Address of the receiver. 'null' when its a contract creation transaction. | [optional]
**getTransactionIndex()** | **mixed** | The integer of the transactions index position in the block; if not returned, the transaction has not been included in a block yet. | [optional]
**getValue()** | **string** | Value transferred in wei. | [optional]
**getGasUsed()** | **mixed** | The amount of gas used by this specific transaction alone; if not returned, the transaction has not been included in a block yet. | [optional]
**getCumulativeGasUsed()** | **mixed** | The total amount of gas used when this transaction was executed in the block; if not returned, the transaction has not been included in a block yet. | [optional]
**getContractAddress()** | **string** | The contract address created, if the transaction was a contract creation, otherwise null. | [optional]
**getLogs()** | [**\Tatum\Model\PolygonTxLog[]**](PolygonTxLog.md) | Log events, that happened in this transaction. | [optional]

[[Back to Index]](../index.md)
