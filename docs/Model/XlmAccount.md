---
title: XlmAccount
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getId()** | **string** | A unique identifier for this account. | [optional]
**getAccountId()** | **string** | This account’s public key encoded in a base32 string representation. | [optional]
**getSequence()** | **string** | This account’s current sequence number. For use when submitting this account’s next transaction. | [optional]
**getSubentryCount()** | **float** | The number of subentries on this account. | [optional]
**getLastModifiedLedger()** | **float** | The ID of the last ledger that included changes to this account. | [optional]
**getThresholds()** | [**\Tatum\Model\XlmAccountThresholds**](../XlmAccountThresholds) |  | [optional]
**getFlags()** | [**\Tatum\Model\XlmAccountFlags**](../XlmAccountFlags) |  | [optional]
**getBalances()** | [**\Tatum\Model\XlmAccountBalancesInner[]**](../XlmAccountBalancesInner) | The assets this account holds. | [optional]
**getSigners()** | [**\Tatum\Model\XlmAccountSignersInner[]**](../XlmAccountSignersInner) | The public keys and associated weights that can be used to authorize transactions for this account. Used for multi-sig. | [optional]
**getData()** | **object** | An array of account data fields. | [optional]

