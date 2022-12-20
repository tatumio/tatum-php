# EthTx

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**block_hash** | **string** | Hash of the block where this transaction was in. | [optional]
**status** | **bool** | TRUE if the transaction was successful, FALSE, if the EVM reverted the transaction. | [optional]
**block_number** | **mixed** | Block number where this transaction was in. | [optional]
**from** | **string** | Address of the sender. | [optional]
**gas** | **float** | Gas provided by the sender. | [optional]
**gas_price** | **string** | Gas price provided by the sender in wei. | [optional]
**transaction_hash** | **string** | Hash of the transaction. | [optional]
**input** | **string** | The data sent along with the transaction. | [optional]
**nonce** | **float** | The number of transactions made by the sender prior to this one. | [optional]
**to** | **string** | Address of the receiver. &#39;null&#39; when its a contract creation transaction. | [optional]
**transaction_index** | **mixed** | Integer of the transactions index position in the block. | [optional]
**value** | **string** | Value transferred in wei. | [optional]
**gas_used** | **mixed** | The amount of gas used by this specific transaction alone. | [optional]
**cumulative_gas_used** | **mixed** | The total amount of gas used when this transaction was executed in the block. | [optional]
**contract_address** | **string** | The contract address created, if the transaction was a contract creation, otherwise null. | [optional]
**logs** | [**\Tatum\Model\EthTxLog[]**](EthTxLog.md) | Log events, that happened in this transaction. | [optional]

[[Back to Index]](../index.md)
