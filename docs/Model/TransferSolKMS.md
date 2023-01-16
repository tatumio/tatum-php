# Model/TransferSolKMS

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSenderAccountId()** | **string** | Sender account ID |
**getFrom()** | **string** | Blockchain account to send from |
**getAddress()** | **string** | Blockchain address to send assets |
**getAmount()** | **string** | Amount to be sent, in SOL. |
**getSignatureId()** | **string** | Identifier of the secret associated in signing application. Secret, or signature Id must be present. |
**getFee()** | **string** | Fee to be charged for the operation. For SOL, fee is decided by the blockchain, but default SOL fee is 0.000005. This fee will be only charged on top of the withdrawal amount to the virtual account. | [optional]
**getCompliant()** | **bool** | Compliance check, if withdrawal is not compliant, it will not be processed. | [optional]
**getPaymentId()** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. | [optional]
**getSenderNote()** | **string** | Note visible to owner of withdrawing account. | [optional]

[[Back to Index]](../index.md)
