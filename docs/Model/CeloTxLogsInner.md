# CeloTxLogsInner

## Getters

Method | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAddress()** | **string** | From which this event originated from. | [optional]
**getTopics()** | **string[]** | An array with max 4 32 Byte topics, topic 1-3 contains indexed parameters of the log. | [optional]
**getData()** | **string** | The data containing non-indexed log parameter. | [optional]
**getLogIndex()** | **float** | Integer of the event index position in the block. | [optional]
**getTransactionIndex()** | **float** | Integer of the transaction’s index position, the event was created in. | [optional]
**getTransactionHash()** | **string** | Hash of the transaction this event was created in. | [optional]

[[Back to Index]](../index.md)
