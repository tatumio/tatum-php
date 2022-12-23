# TransferXlmBlockchainKMS

## Getters

Method | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFromAccount()** | **string** | Blockchain account to send assets from |
**getTo()** | **string** | Blockchain address to send assets |
**getAmount()** | **string** | Amount to be sent, in XLM. |
**getSignatureId()** | **string** | Identifier of the secret associated in signing application. Secret, or signature Id must be present. |
**getInitialize()** | **bool** | Set to true, if the destination address is not yet initialized and should be funded for the first time. | [optional] [default to false]
**getMessage()** | **string** | Short message to recipient. It can be either 28 characters long ASCII text, 64 characters long HEX string or uint64 number. | [optional]

[[Back to Index]](../index.md)
