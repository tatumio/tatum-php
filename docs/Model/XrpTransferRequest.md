# XrpTransferRequest

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSenderAccountId()** | **string** | Sender account ID |
**getAccount()** | **string** | XRP account address. Must be the one used for generating deposit tags. |
**getAddress()** | **string** | Blockchain address to send assets |
**getAmount()** | **string** | Amount to be sent, in XRP. |
**getCompliant()** | **bool** | Compliance check, if withdrawal is not compliant, it will not be processed. | [optional]
**getAttr()** | **string** | Destination tag of the recipient account, if any. Must be stringified uint32. | [optional]
**getSourceTag()** | **int** | Source tag of sender account, if any. | [optional]
**getPaymentId()** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. | [optional]
**getSecret()** | **string** | Secret for account. Secret, or signature Id must be present. |
**getSenderNote()** | **string** | Note visible to owner of withdrawing account. | [optional]
**getSignatureId()** | **string** | Identifier of the secret associated in signing application. Secret, or signature Id must be present. |

[[Back to Index]](../index.md)
