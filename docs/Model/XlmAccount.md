---
title: XlmAccount
parent: Model
layout: page
---

# XlmAccount

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getId()** | **string** | A unique identifier for this account. | ex.: `GBRPYHIL2CI3FNQ4BXLFMNDLFJUNPU2HY3ZMFSHONUCEOASW7QC7OX2H` [optional]
**getAccountId()** | **string** | This account’s public key encoded in a base32 string representation. | ex.: `GBRPYHIL2CI3FNQ4BXLFMNDLFJUNPU2HY3ZMFSHONUCEOASW7QC7OX2H` [optional]
**getSequence()** | **string** | This account’s current sequence number. For use when submitting this account’s next transaction. | ex.: `1` [optional]
**getSubentryCount()** | **float** | The number of subentries on this account. | ex.: `0` [optional]
**getLastModifiedLedger()** | **float** | The ID of the last ledger that included changes to this account. | ex.: `102` [optional]
**getThresholds()** | [**\Tatum\Model\XlmAccountThresholds**](../XlmAccountThresholds) |  | ex.: `null` [optional]
**getFlags()** | [**\Tatum\Model\XlmAccountFlags**](../XlmAccountFlags) |  | ex.: `null` [optional]
**getBalances()** | [**\Tatum\Model\XlmAccountBalancesInner[]**](../XlmAccountBalancesInner) | The assets this account holds. | ex.: `null` [optional]
**getSigners()** | [**\Tatum\Model\XlmAccountSignersInner[]**](../XlmAccountSignersInner) | The public keys and associated weights that can be used to authorize transactions for this account. Used for multi-sig. | ex.: `null` [optional]
**getData()** | **object** | An array of account data fields. | ex.: `null` [optional]

