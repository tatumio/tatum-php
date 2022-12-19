# TransactionFilterCustomer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Customer internal ID to search for. |
**account** | **string** | Source account - source of transaction(s). | [optional]
**counter_account** | **string** | Counter account - transaction(s) destination account. | [optional]
**currency** | **string** | Currency of the transactions. | [optional]
**from** | **int** | Starting date to search for transactions from in UTC millis. If not present, search all history. | [optional]
**to** | **int** | Date until to search for transactions in UTC millis. If not present, search up till now. | [optional]
**amount** | [**\Tatum\Model\TransactionFilterAmountInner[]**](TransactionFilterAmountInner.md) | Amount of the transaction. AND is used between filter options. | [optional]
**currencies** | **string[]** | List of currencies of the transactions. | [optional]
**transaction_type** | **string** | Type of payment | [optional]
**transaction_types** | **string[]** | Types of payment | [optional]
**op_type** | **string** | Type of operation. | [optional]
**transaction_code** | **string** | For bookkeeping to distinct transaction purpose. | [optional]
**payment_id** | **string** | Payment ID defined in payment order by sender. | [optional]
**recipient_note** | **string** | Recipient note defined in payment order by sender. | [optional]
**sender_note** | **string** | Sender note defined in payment order by sender. | [optional]

[[Back to API list]](../../README.md#api-endpoints)
