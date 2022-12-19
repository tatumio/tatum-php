# EgldTx

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of transaction. | [optional]
**nonce** | **float** | Nonce of the transaction. | [optional]
**round** | **float** | The round number. | [optional]
**epoch** | **float** | An epoch is a sequence of consecutive rounds during which the configuration of the network does not change (currently aprox. 24 hrs in length). | [optional]
**value** | **string** | Transferred value. | [optional]
**receiver** | **string** | Address of the receiver. | [optional]
**sender** | **string** | Address of the sender. | [optional]
**gas_price** | **float** | Gas price provided by the sender | [optional]
**gas_limit** | **float** | Gas provided by the sender | [optional]
**data** | **string** | Data field in transaction. | [optional]
**signature** | **string** | Signature of the transaction. | [optional]
**source_shard** | **float** | Source shard. | [optional]
**destination_shard** | **float** | Destination shard. | [optional]
**block_nonce** | **float** | Nonce of block which contains current transaction. | [optional]
**block_hash** | **string** | Hash of block which contains current transaction. | [optional]
**miniblock_hash** | **string** | Miniblock hash. | [optional]
**timestamp** | **float** | The unix timestamp for when the block was collated. | [optional]
**status** | **string** | Status of the transaction. | [optional]
**hyperblock_nonce** | **float** | Nonce of the hyperblockwhere this transaction was in. | [optional]
**hyperblock_hash** | **string** | Hash of the hyperblock where this transaction was in. | [optional]

[[Back to API list]](../../README.md#api-endpoints)
