# Model/TransferOneBlockchain

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAmount()** | **string** | The amount to transfer |
**getCurrency()** | **string** | The currency of the amount to transfer |
**getTo()** | **string** | The blockchain address to transfer the amount to |
**getFromPrivateKey()** | **string** | The private key of the blockchain address from which the fee will be deducted |
**getFee()** | [**\Tatum\Model\CustomFee**](CustomFee.md) |  | [optional]
**getData()** | **string** | Additional data that can be passed to a blockchain transaction as a data property; must be in the hexadecimal format | [optional]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]

[[Back to Index]](../index.md)
