# Model/XrpFee

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getCurrentLedgerSize()** | **string** | Number of transactions provisionally included in the in-progress ledger. | [optional]
**getCurrentQueueSize()** | **string** | Number of transactions currently queued for the next ledger. | [optional]
**getDrops()** | [**\Tatum\Model\XrpFeeDrops**](XrpFeeDrops.md) |  | [optional]
**getExpectedLedgerSize()** | **string** | The approximate number of transactions expected to be included in the current ledger. This is based on the number of transactions in the previous ledger. | [optional]
**getLedgerCurrentIndex()** | **float** | The Ledger Index of the current open ledger these stats describe. | [optional]
**getLevels()** | [**\Tatum\Model\XrpFeeLevels**](XrpFeeLevels.md) |  | [optional]
**getMaxQueueSize()** | **string** | The maximum number of transactions that the transaction queue can currently hold. | [optional]

[[Back to Index]](../index.md)
