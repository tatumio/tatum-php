# CreateRecordCelo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**data** | **string** | Log data to be stored on a blockchain. |
**chain** | **string** | Blockchain, where to store log data. |
**fee_currency** | **string** | Currency to pay for transaction gas |
**from_private_key** | **string** | Private key of account, from which the transaction will be initiated. If not present, transaction fee will be debited from Tatum internal account and additional credits will be charged. | [optional]
**nonce** | **float** | Nonce to be set to Ethereum transaction. If not present, last known nonce will be used. | [optional]
**to** | **string** | Blockchain address to store log on. If not defined, it will be stored on an address, from which the transaction was being made. | [optional]

[[Back to API list]](../../README.md#api-endpoints)
