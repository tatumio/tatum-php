---
title: XrpFeeLevels
parent: Model
layout: page
---

# XrpFeeLevels

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getMedianLevel()** | **string** | The median transaction cost among transactions in the previous validated ledger, represented in fee levels. <br>Example: `128000` | [optional]
**getMinimumLevel()** | **string** | The minimum transaction cost required to be queued for a future ledger, represented in fee levels. <br>Example: `256` | [optional]
**getOpenLedgerLevel()** | **string** | The minimum transaction cost required to be included in the current open ledger, represented in fee levels. <br>Example: `256` | [optional]
**getReferenceLevel()** | **string** | The equivalent of the minimum transaction cost, represented in fee levels. <br>Example: `256` | [optional]

