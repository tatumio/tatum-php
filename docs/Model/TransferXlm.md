# TransferXlm

## Getters

Method | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSenderAccountId()** | **string** | Sender account ID |
**getFromAccount()** | **string** | Blockchain account to send from |
**getAddress()** | **string** | Blockchain address to send assets |
**getAmount()** | **string** | Amount to be sent, in XLM or XLM-based Asset. |
**getSecret()** | **string** | Secret for account. Secret, or signature Id must be present. |
**getCompliant()** | **bool** | Compliance check, if withdrawal is not compliant, it will not be processed. | [optional]
**getAttr()** | **string** | Short message to recipient. Usually used as an account discriminator. It can be either 28 characters long ASCII text, 64 characters long HEX string or uint64 number. When using as an account disciminator in Tatum Offchain ledger, can be in format of destination_acc/source_acc. | [optional]
**getPaymentId()** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. | [optional]
**getSenderNote()** | **string** | Note visible to owner of withdrawing account. | [optional]

[[Back to Index]](../index.md)
