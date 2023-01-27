---
title: XlmAccount
parent: Model
layout: page
---

# XlmAccount

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getId()** | **string** | A unique identifier for this account. <br>Example: `GBRPYHIL2CI3FNQ4BXLFMNDLFJUNPU2HY3ZMFSHONUCEOASW7QC7OX2H` | [optional]
**getAccountId()** | **string** | This account’s public key encoded in a base32 string representation. <br>Example: `GBRPYHIL2CI3FNQ4BXLFMNDLFJUNPU2HY3ZMFSHONUCEOASW7QC7OX2H` | [optional]
**getSequence()** | **string** | This account’s current sequence number. For use when submitting this account’s next transaction. <br>Example: `1` | [optional]
**getSubentryCount()** | **float** | The number of subentries on this account. <br>Example: `0` | [optional]
**getLastModifiedLedger()** | **float** | The ID of the last ledger that included changes to this account. <br>Example: `102` | [optional]
**getThresholds()** | [**\Tatum\Model\XlmAccountThresholds**](../XlmAccountThresholds) |  <br>Example: `null` | [optional]
**getFlags()** | [**\Tatum\Model\XlmAccountFlags**](../XlmAccountFlags) |  <br>Example: `null` | [optional]
**getBalances()** | [**\Tatum\Model\XlmAccountBalancesInner[]**](../XlmAccountBalancesInner) | The assets this account holds. <br>Example: `null` | [optional]
**getSigners()** | [**\Tatum\Model\XlmAccountSignersInner[]**](../XlmAccountSignersInner) | The public keys and associated weights that can be used to authorize transactions for this account. Used for multi-sig. <br>Example: `null` | [optional]
**getData()** | **object** | An array of account data fields. <br>Example: `null` | [optional]

