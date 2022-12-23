# XlmTransferBlockchainRequest

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFromAccount()** | **string** | Blockchain account to send assets from |
**getTo()** | **string** | Blockchain address to send assets |
**getAmount()** | **string** | Amount to be sent, in XLM. |
**getFromSecret()** | **string** | Secret for account. Secret, or signature Id must be present. |
**getInitialize()** | **bool** | Set to true, if the destination address is not yet initialized and should be funded for the first time. | [optional] [default to false]
**getMessage()** | **string** | Short message to recipient. It can be either 28 characters long ASCII text, 64 characters long HEX string or uint64 number. | [optional]
**getToken()** | **string** | Asset name. If not defined, transaction is being sent in native XLM asset. |
**getIssuerAccount()** | **string** | Blockchain address of the issuer of the assets to send, if not native XLM asset. |
**getSignatureId()** | **string** | Identifier of the secret associated in signing application. Secret, or signature Id must be present. |

[[Back to Index]](../index.md)
