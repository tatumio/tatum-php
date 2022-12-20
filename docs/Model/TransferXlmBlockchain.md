# TransferXlmBlockchain

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from_account** | **string** | Blockchain account to send assets from |
**to** | **string** | Blockchain address to send assets |
**amount** | **string** | Amount to be sent, in XLM. |
**from_secret** | **string** | Secret for account. Secret, or signature Id must be present. |
**initialize** | **bool** | Set to true, if the destination address is not yet initialized and should be funded for the first time. | [optional] [default to false]
**message** | **string** | Short message to recipient. It can be either 28 characters long ASCII text, 64 characters long HEX string or uint64 number. | [optional]

[[Back to Index]](../index.md)
