# Model/TransferFlowKMS

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSenderAccountId()** | **string** | Sender account ID |
**getAccount()** | **string** | Blockchain account to send from |
**getAddress()** | **string** | Blockchain address to send assets |
**getAmount()** | **string** | Amount to be sent, in Flow. |
**getSignatureId()** | **string** | Identifier of the secret associated in signing application. Secret, or signature Id must be present. |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**getCompliant()** | **bool** | Compliance check, if withdrawal is not compliant, it will not be processed. | [optional]
**getPaymentId()** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. | [optional]
**getSenderNote()** | **string** | Note visible to owner of withdrawing account. | [optional]

[[Back to Index]](../index.md)
