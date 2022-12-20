# TransferXlmBlockchainAsset

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from_account** | **string** | Blockchain account to send assets from |
**to** | **string** | Blockchain address to send assets |
**amount** | **string** | Amount to be sent, in XLM. |
**from_secret** | **string** | Secret for account. Secret, or signature Id must be present. |
**initialize** | **bool** | Set to true, if the destination address is not yet initialized and should be funded for the first time. | [optional] [default to false]
**token** | **string** | Asset name. If not defined, transaction is being sent in native XLM asset. |
**issuer_account** | **string** | Blockchain address of the issuer of the assets to send, if not native XLM asset. |
**message** | **string** | Short message to recipient. It can be either 28 characters long ASCII text, 64 characters long HEX string or uint64 number. | [optional]

[[Back to Index]](../index.md)
