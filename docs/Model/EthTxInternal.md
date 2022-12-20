# EthTxInternal

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from** | **string** | Address of the sender. | [optional]
**to** | **string** | Address of the receiver. 'null' when its a contract creation transaction. | [optional]
**value** | **string** | Value transferred in wei. | [optional]
**block_number** | **float** | Block number where this transaction was in. | [optional]
**time_stamp** | **string** | Time of the transaction in seconds. | [optional]
**hash** | **string** | Hash of the transaction. | [optional]
**input** | **string** | The data sent along with the transaction. | [optional]
**trace_id** | **string** | Trace ID. | [optional]
**type** | **string** | Type of the transaction. | [optional]
**err_code** | **string** | Error code. | [optional]
**gas** | **float** | Gas provided by the sender. | [optional]
**is_error** | **string** | 1 if the transaction was not successful, 0 otherwise. | [optional]
**gas_used** | **float** | The amount of gas used by this specific transaction alone. | [optional]
**contract_address** | **string** | The contract address created, if the transaction was a contract creation, otherwise null. | [optional]

[[Back to Index]](../index.md)
