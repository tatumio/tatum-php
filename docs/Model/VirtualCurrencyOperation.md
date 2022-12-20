# VirtualCurrencyOperation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Ledger account with currency of the virtual currency, on which the operation will be performed. |
**amount** | **string** | Amount of virtual currency to operate within this operation. |
**payment_id** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. | [optional]
**reference** | **string** | Reference of the payment. | [optional]
**transaction_code** | **string** | For bookkeeping to distinct transaction purpose. | [optional]
**recipient_note** | **string** | Note visible to both, sender and recipient. Available for both Mint and Revoke operations | [optional]
**counter_account** | **string** | External account identifier. By default, there is no counterAccount present in the transaction. | [optional]
**sender_note** | **string** | Note visible to sender. Available in Revoke operation. | [optional]

[[Back to Index]](../index.md)
