# TransferBnb

## Getters

Method | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSenderAccountId()** | **string** | Sender account ID |
**getAddress()** | **string** | Blockchain address to send assets |
**getAmount()** | **string** | Amount to be sent, in BNB. |
**getCompliant()** | **bool** | Compliance check, if withdrawal is not compliant, it will not be processed. | [optional]
**getAttr()** | **string** | Memo of the recipient account, if any. | [optional]
**getPaymentId()** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. | [optional]
**getFromPrivateKey()** | **string** | Private key of sender address. |
**getSenderNote()** | **string** | Note visible to owner of withdrawing account. | [optional]

[[Back to Index]](../index.md)
