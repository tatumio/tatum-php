# TransactionFilter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Account ID - source of transaction(s). |
**counter_account** | **string** | Counter account - transaction(s) destination account. | [optional]
**from** | **int** | Starting date to search for transactions from in UTC millis. If not present, search all history. | [optional]
**to** | **int** | Date until to search for transactions in UTC millis. If not present, search up till now. | [optional]
**currency** | **string** | Currency of the transactions. | [optional]
**amount** | [**\Tatum\Model\TransactionFilterAmountInner[]**](TransactionFilterAmountInner.md) | Amount of the transaction. AND is used between filter options. | [optional]
**currencies** | **string[]** | List of currencies of the transactions. | [optional]
**transaction_type** | **string** | Type of payment | [optional]
**transaction_types** | **string[]** | Types of payment | [optional]
**op_type** | **string** | Type of operation | [optional]
**transaction_code** | **string** | For bookkeeping to distinct transaction purpose. | [optional]
**payment_id** | **string** | Payment ID defined in payment order by sender. | [optional]
**recipient_note** | **string** | Recipient note defined in payment order by sender. | [optional]
**sender_note** | **string** | Sender note defined in payment order by sender. | [optional]

[[Back to API list]](../../README.md#api-endpoints)
