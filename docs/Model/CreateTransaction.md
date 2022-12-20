# CreateTransaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sender_account_id** | **string** | Internal sender account ID within Tatum platform |
**recipient_account_id** | **string** | Internal recipient account ID within Tatum platform |
**amount** | **string** | Amount to be sent. |
**anonymous** | **bool** | Anonymous transaction does not show sender account to recipient, default is false | [optional] [default to false]
**compliant** | **bool** | Enable compliant checks. Transaction will not be processed, if compliant check fails. | [optional]
**transaction_code** | **string** | For bookkeeping to distinct transaction purpose. | [optional]
**payment_id** | **string** | Payment ID, External identifier of the payment, which can be used to pair transactions within Tatum accounts. | [optional]
**recipient_note** | **string** | Note visible to both, sender and recipient | [optional]
**base_rate** | **float** | Exchange rate of the base pair. Only applicable for Tatum&#39;s Virtual currencies Ledger transactions. Override default exchange rate for the Virtual Currency. | [optional] [default to 1]
**sender_note** | **string** | Note visible to sender | [optional]

[[Back to Index]](../index.md)
