# VirtualCurrencyOperation

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAccountId()** | **string** | Ledger account with currency of the virtual currency, on which the operation will be performed. |
**getAmount()** | **string** | Amount of virtual currency to operate within this operation. |
**getPaymentId()** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. | [optional]
**getReference()** | **string** | Reference of the payment. | [optional]
**getTransactionCode()** | **string** | For bookkeeping to distinct transaction purpose. | [optional]
**getRecipientNote()** | **string** | Note visible to both, sender and recipient. Available for both Mint and Revoke operations | [optional]
**getCounterAccount()** | **string** | External account identifier. By default, there is no counterAccount present in the transaction. | [optional]
**getSenderNote()** | **string** | Note visible to sender. Available in Revoke operation. | [optional]

[[Back to Index]](../index.md)
