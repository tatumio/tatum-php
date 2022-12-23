# FlowTransactionKMS

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAccount()** | **string** | Blockchain account to send from |
**getCurrency()** | **string** | Type of asset to send |
**getTo()** | **string** | Blockchain address to send assets |
**getAmount()** | **string** | Amount to be sent, in Flow. |
**getSignatureId()** | **string** | Identifier of the secret associated in signing application. Secret, or signature Id must be present. |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]

[[Back to Index]](../index.md)
