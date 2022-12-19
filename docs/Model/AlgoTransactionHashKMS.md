# AlgoTransactionHashKMS

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tx_id** | **string** | TX hash of transaction. |
**asset_index** | **float** | If transaction created new ASA asset, this value is the index of the asset on the network. | [optional]
**confirmed** | **bool** | If transaction was not confirmed within 5 rounds, result is false. | [optional] [default to false]
**failed** | **bool** | In case of the transaction was broadcast to the blockchain, but it was not possible to complete Tatum KMS signature, reponse is marked as failed and must be marked manually. | [optional]

[[Back to API list]](../../README.md#api-endpoints)
