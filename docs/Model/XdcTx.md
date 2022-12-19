# XdcTx

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hash** | **string** | Hash of the transaction. | [optional]
**nonce** | **float** | The number of transactions made by the sender prior to this one. | [optional]
**block_hash** | **string** | Hash of the block where this transaction was in. | [optional]
**block_number** | **float** | Block number where this transaction was in. | [optional]
**transaction_index** | **float** | Integer of the transactions index position in the block. | [optional]
**from** | **string** | Address of the sender. | [optional]
**to** | **string** | Address of the receiver. &#39;null&#39; when its a contract creation transaction. | [optional]
**value** | **string** | Value transferred in wei. | [optional]
**gas** | **float** | Gas provided by the sender. | [optional]
**gas_price** | **string** | Gas price provided by the sender in wei. | [optional]
**input** | **string** | The data sent along with the transaction. | [optional]
**status** | **bool** | TRUE if the transaction was successful, FALSE, if the EVM reverted the transaction. | [optional]
**gas_used** | **float** | The amount of gas used by this specific transaction alone. | [optional]
**cumulative_gas_used** | **float** | The total amount of gas used when this transaction was executed in the block. | [optional]
**contract_address** | **string** | The contract address created, if the transaction was a contract creation, otherwise null. | [optional]
**logs** | [**\Tatum\Model\KlaytnTxLogsInner[]**](KlaytnTxLogsInner.md) | Log events, that happened in this transaction. | [optional]
**logs_bloom** | **string** | Bloom filter for light clients to quickly retrieve related logs. | [optional]
**root** | **string** | 32 bytes of post-transaction stateroot (pre Byzantium) | [optional]

[[Back to API list]](../../README.md#api-endpoints)
