# Model/XdcTx

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getHash()** | **string** | Hash of the transaction. | [optional]
**getNonce()** | **float** | The number of transactions made by the sender prior to this one. | [optional]
**getBlockHash()** | **string** | Hash of the block where this transaction was in. | [optional]
**getBlockNumber()** | **float** | Block number where this transaction was in. | [optional]
**getTransactionIndex()** | **float** | Integer of the transactions index position in the block. | [optional]
**getFrom()** | **string** | Address of the sender. | [optional]
**getTo()** | **string** | Address of the receiver. 'null' when its a contract creation transaction. | [optional]
**getValue()** | **string** | Value transferred in wei. | [optional]
**getGas()** | **float** | Gas provided by the sender. | [optional]
**getGasPrice()** | **string** | Gas price provided by the sender in wei. | [optional]
**getInput()** | **string** | The data sent along with the transaction. | [optional]
**getStatus()** | **bool** | TRUE if the transaction was successful, FALSE, if the EVM reverted the transaction. | [optional]
**getGasUsed()** | **float** | The amount of gas used by this specific transaction alone. | [optional]
**getCumulativeGasUsed()** | **float** | The total amount of gas used when this transaction was executed in the block. | [optional]
**getContractAddress()** | **string** | The contract address created, if the transaction was a contract creation, otherwise null. | [optional]
**getLogs()** | [**\Tatum\Model\KlaytnTxLogsInner[]**](KlaytnTxLogsInner.md) | Log events, that happened in this transaction. | [optional]
**getLogsBloom()** | **string** | Bloom filter for light clients to quickly retrieve related logs. | [optional]
**getRoot()** | **string** | 32 bytes of post-transaction stateroot (pre Byzantium) | [optional]

[[Back to Index]](../index.md)
