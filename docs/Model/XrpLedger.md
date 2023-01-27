---
title: XrpLedger
parent: Model
layout: page
---

# XrpLedger

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getLedger()** | [**\Tatum\Model\XrpLedgerLedger**](../XrpLedgerLedger) |  <br>Example: `null` | [optional]
**getLedgerHash()** | **string** | Unique identifying hash of the entire ledger. <br>Example: `198E3A43EFD03F61CF11EAD6585E8C82A21C1B91CCF782A3264973867E697906` | [optional]
**getLedgerIndex()** | **int** | The Ledger Index of this ledger. <br>Example: `6543210` | [optional]
**getValidated()** | **bool** | True if this data is from a validated ledger version; if omitted or set to false, this data is not final. <br>Example: `true` | [optional]

