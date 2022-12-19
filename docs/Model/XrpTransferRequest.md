# XrpTransferRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sender_account_id** | **string** | Sender account ID |
**account** | **string** | XRP account address. Must be the one used for generating deposit tags. |
**address** | **string** | Blockchain address to send assets |
**amount** | **string** | Amount to be sent, in XRP. |
**compliant** | **bool** | Compliance check, if withdrawal is not compliant, it will not be processed. | [optional]
**attr** | **string** | Destination tag of the recipient account, if any. Must be stringified uint32. | [optional]
**source_tag** | **int** | Source tag of sender account, if any. | [optional]
**payment_id** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. | [optional]
**secret** | **string** | Secret for account. Secret, or signature Id must be present. |
**sender_note** | **string** | Note visible to owner of withdrawing account. | [optional]
**signature_id** | **string** | Identifier of the secret associated in signing application. Secret, or signature Id must be present. |

[[Back to API list]](../../README.md#api-endpoints)
