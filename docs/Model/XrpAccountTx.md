# XrpAccountTx

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account** | **string** | Unique Address identifying the related account. | [optional]
**ledger_index_max** | **float** | The ledger index of the earliest ledger actually searched for transactions. | [optional]
**ledger_index_min** | **float** | The ledger index of the most recent ledger actually searched for transactions. | [optional]
**marker** | [**\Tatum\Model\XrpAccountTxMarker**](XrpAccountTxMarker.md) |  | [optional]
**transactions** | [**\Tatum\Model\XrpAccountTxTransactionsInner[]**](XrpAccountTxTransactionsInner.md) | Array of transactions matching the request's criteria, as explained below. | [optional]

[[Back to Index]](../index.md)
