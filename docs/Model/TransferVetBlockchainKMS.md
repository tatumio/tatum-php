# TransferVetBlockchainKMS

## Getters

Method | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getTo()** | **string** | Blockchain address to send assets |
**getAmount()** | **string** | Amount to be sent in VET |
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**getData()** | **string** | Additional data that can be passed to a blockchain transaction as a data property; must be in the hexadecimal format | [optional]
**getFee()** | [**\Tatum\Model\TransferVetBlockchainFee**](TransferVetBlockchainFee.md) |  | [optional]

[[Back to Index]](../index.md)
