---
title: XrpFee
parent: Model
layout: page
---

# XrpFee

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getCurrentLedgerSize()** | **string** | Number of transactions provisionally included in the in-progress ledger. | ex.: `8` [optional]
**getCurrentQueueSize()** | **string** | Number of transactions currently queued for the next ledger. | ex.: `0` [optional]
**getDrops()** | [**\Tatum\Model\XrpFeeDrops**](../XrpFeeDrops) |  | ex.: `null` [optional]
**getExpectedLedgerSize()** | **string** | The approximate number of transactions expected to be included in the current ledger. This is based on the number of transactions in the previous ledger. | ex.: `67` [optional]
**getLedgerCurrentIndex()** | **float** | The Ledger Index of the current open ledger these stats describe. | ex.: `760411` [optional]
**getLevels()** | [**\Tatum\Model\XrpFeeLevels**](../XrpFeeLevels) |  | ex.: `null` [optional]
**getMaxQueueSize()** | **string** | The maximum number of transactions that the transaction queue can currently hold. | ex.: `2000` [optional]

