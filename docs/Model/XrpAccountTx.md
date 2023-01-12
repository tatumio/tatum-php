# XrpAccountTx

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAccount()** | **string** | Unique Address identifying the related account. | [optional]
**getLedgerIndexMax()** | **float** | The ledger index of the earliest ledger actually searched for transactions. | [optional]
**getLedgerIndexMin()** | **float** | The ledger index of the most recent ledger actually searched for transactions. | [optional]
**getMarker()** | [**\Tatum\Model\XrpAccountTxMarker**](XrpAccountTxMarker.md) |  | [optional]
**getTransactions()** | [**\Tatum\Model\XrpAccountTxTransactionsInner[]**](XrpAccountTxTransactionsInner.md) | Array of transactions matching the request's criteria, as explained below. | [optional]

[[Back to Index]](../index.md)
