# EthTxInternal

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFrom()** | **string** | Address of the sender. | [optional]
**getTo()** | **string** | Address of the receiver. 'null' when its a contract creation transaction. | [optional]
**getValue()** | **string** | Value transferred in wei. | [optional]
**getBlockNumber()** | **float** | Block number where this transaction was in. | [optional]
**getTimeStamp()** | **string** | Time of the transaction in seconds. | [optional]
**getHash()** | **string** | Hash of the transaction. | [optional]
**getInput()** | **string** | The data sent along with the transaction. | [optional]
**getTraceId()** | **string** | Trace ID. | [optional]
**getType()** | **string** | Type of the transaction. | [optional]
**getErrCode()** | **string** | Error code. | [optional]
**getGas()** | **float** | Gas provided by the sender. | [optional]
**getIsError()** | **string** | 1 if the transaction was not successful, 0 otherwise. | [optional]
**getGasUsed()** | **float** | The amount of gas used by this specific transaction alone. | [optional]
**getContractAddress()** | **string** | The contract address created, if the transaction was a contract creation, otherwise null. | [optional]

[[Back to Index]](../index.md)
