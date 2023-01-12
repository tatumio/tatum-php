# Transaction

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAccountId()** | **string** | Source account - source of transaction(s) |
**getCounterAccountId()** | **string** | Counter account - transaction(s) destination account. In case of blockchain recipient, this is addess of blockchain account. | [optional]
**getCurrency()** | **string** | Transaction currency |
**getAmount()** | **string** | Amount in account's currency |
**getAnonymous()** | **bool** | Whether the transaction is anonymous. If true, counter account owner does not see source account. |
**getCreated()** | **float** | Time in UTC of transaction. |
**getMarketValue()** | [**\Tatum\Model\MarketValue**](MarketValue.md) |  |
**getOperationType()** | **string** | Type of operation. |
**getTransactionType()** | **string** | Type of payment. |
**getReference()** | **string** | Transaction internal reference - unique identifier within Tatum ledger. In order of failure, use this value to search for problems. |
**getTransactionCode()** | **string** | For bookkeeping to distinct transaction purpose. | [optional]
**getSenderNote()** | **string** | Note visible for sender. | [optional]
**getRecipientNote()** | **string** | Note visible for both sender and recipient. | [optional]
**getPaymentId()** | **string** | Payment ID defined in payment order by sender. | [optional]
**getAttr()** | **string** | Present only for operationType WITHDRAWAL and XLM / XRP based accounts it represents message or destinationTag of the recipient, if present. | [optional]
**getAddress()** | **string** | For operationType DEPOSIT it represents address, on which was deposit credited for the account. | [optional]
**getTxId()** | **string** | For operationType DEPOSIT, BLOCKCHAIN_TRANSACTION it represents transaction id, for which deposit occured. | [optional]

[[Back to Index]](../index.md)
