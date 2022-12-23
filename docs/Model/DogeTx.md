# DogeTx

## Getters

Method | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getHash()** | **string** | Transaction hash. | [optional]
**getSize()** | **float** | Size of the transaction. | [optional]
**getVsize()** | **float** |  | [optional]
**getVersion()** | **float** | Index of the transaction. | [optional]
**getVin()** | [**\Tatum\Model\DogeTxVinInner[]**](DogeTxVinInner.md) | List of transactions, from which assets are being sent. | [optional]
**getVout()** | [**\Tatum\Model\DogeTxVoutInner[]**](DogeTxVoutInner.md) | List of recipient addresses and amounts to send to each of them. | [optional]
**getLocktime()** | **float** |  | [optional]

[[Back to Index]](../index.md)
