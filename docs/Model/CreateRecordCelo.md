# CreateRecordCelo

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getData()** | **string** | The data to be stored on the blockchain |
**getChain()** | **string** | The blockchain to store the data on |
**getFromPrivateKey()** | **string** | The private key of the blockchain address from which the transaction will be made and the transaction fee will be deducted |
**getFeeCurrency()** | **string** | The currency in which the transaction fee will be paid |
**getTo()** | **string** | The blockchain address to store the data on<br/>If not provided, the data will be stored on the address from which the transaction is made. | [optional]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]

[[Back to Index]](../index.md)
