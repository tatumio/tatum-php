# BnbTransferRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sender_account_id** | **string** | Sender account ID |
**address** | **string** | Blockchain address to send assets |
**amount** | **string** | Amount to be sent, in BNB. |
**compliant** | **bool** | Compliance check, if withdrawal is not compliant, it will not be processed. | [optional]
**attr** | **string** | Memo of the recipient account, if any. | [optional]
**payment_id** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. | [optional]
**from_private_key** | **string** | Private key of sender address. |
**sender_note** | **string** | Note visible to owner of withdrawing account. | [optional]
**signature_id** | **string** | Identifier of the secret associated in signing application. Secret, or signature Id must be present. |
**from_address** | **string** | Blockchain address to send from. |

[[Back to Index]](../index.md)
