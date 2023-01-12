# XlmLedger

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getId()** | **string** | A unique identifier for this ledger. | [optional]
**getPagingToken()** | **string** | A cursor value for use in pagination. | [optional]
**getHash()** | **string** | A hex-encoded SHA-256 hash of this ledger’s XDR-encoded form. | [optional]
**getSequence()** | **float** | The sequence number of this ledger, and the parameter used in Horizon calls that require a ledger number. | [optional]
**getSuccessfulTransactionCount()** | **float** | The number of successful transactions in this ledger. | [optional]
**getFailedTransactionCount()** | **float** | The number of failed transactions in this ledger. | [optional]
**getOperationCount()** | **float** | The number of operations applied in this ledger. | [optional]
**getClosedAt()** | **string** | An ISO 8601 formatted string of when this ledger was closed. | [optional]
**getTotalCoins()** | **string** | The total number of lumens in circulation. | [optional]
**getFeePool()** | **string** | The sum of all transaction fees. | [optional]
**getBaseFeeInStroops()** | **float** | The fee the network charges per operation in a transaction. | [optional]
**getBaseReserveInStroops()** | **float** | The reserve the network uses when calculating an account’s minimum balance. | [optional]
**getMaxTxSetSize()** | **float** | The maximum number of transactions validators have agreed to process in a given ledger. | [optional]
**getProtocolVersion()** | **float** | The protocol version that the Stellar network was running when this ledger was committed. | [optional]
**getHeaderXdr()** | **string** | A base64 encoded string of the raw LedgerHeader xdr struct for this ledger. | [optional]

[[Back to Index]](../index.md)
