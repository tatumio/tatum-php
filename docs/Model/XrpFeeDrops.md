---
title: XrpFeeDrops
parent: Model
layout: page
---

# XrpFeeDrops

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getBaseFee()** | **string** | The transaction cost required for a reference transaction to be included in a ledger under minimum load, represented in drops of XRP. | ex.: `10` [optional]
**getMedianFee()** | **string** | An approximation of the median transaction cost among transactions included in the previous validated ledger, represented in drops of XRP. | ex.: `5000` [optional]
**getMinimumFee()** | **string** | The minimum transaction cost for a reference transaction to be queued for a later ledger, represented in drops of XRP. If greater than base_fee, the transaction queue is full. | ex.: `10` [optional]
**getOpenLedgerFee()** | **string** | The minimum transaction cost that a reference transaction must pay to be included in the current open ledger, represented in drops of XRP. | ex.: `10` [optional]

