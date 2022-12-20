# CreateRecordCelo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**data** | **string** | The data to be stored on the blockchain |
**chain** | **string** | The blockchain to store the data on |
**from_private_key** | **string** | The private key of the blockchain address from which the transaction will be made and the transaction fee will be deducted |
**fee_currency** | **string** | The currency in which the transaction fee will be paid |
**to** | **string** | The blockchain address to store the data on<br/>If not provided, the data will be stored on the address from which the transaction is made. | [optional]
**nonce** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]

[[Back to Index]](../index.md)
