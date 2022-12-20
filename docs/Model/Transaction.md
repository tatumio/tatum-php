# Transaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Source account - source of transaction(s) |
**counter_account_id** | **string** | Counter account - transaction(s) destination account. In case of blockchain recipient, this is addess of blockchain account. | [optional]
**currency** | **string** | Transaction currency |
**amount** | **string** | Amount in account's currency |
**anonymous** | **bool** | Whether the transaction is anonymous. If true, counter account owner does not see source account. |
**created** | **float** | Time in UTC of transaction. |
**market_value** | [**\Tatum\Model\MarketValue**](MarketValue.md) |  |
**operation_type** | **string** | Type of operation. |
**transaction_type** | **string** | Type of payment. |
**reference** | **string** | Transaction internal reference - unique identifier within Tatum ledger. In order of failure, use this value to search for problems. |
**transaction_code** | **string** | For bookkeeping to distinct transaction purpose. | [optional]
**sender_note** | **string** | Note visible for sender. | [optional]
**recipient_note** | **string** | Note visible for both sender and recipient. | [optional]
**payment_id** | **string** | Payment ID defined in payment order by sender. | [optional]
**attr** | **string** | Present only for operationType WITHDRAWAL and XLM / XRP based accounts it represents message or destinationTag of the recipient, if present. | [optional]
**address** | **string** | For operationType DEPOSIT it represents address, on which was deposit credited for the account. | [optional]
**tx_id** | **string** | For operationType DEPOSIT, BLOCKCHAIN_TRANSACTION it represents transaction id, for which deposit occured. | [optional]

[[Back to Index]](../index.md)
