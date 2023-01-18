---
title: XrpAccountAccountData
parent: Model
layout: page
---

# XrpAccountAccountData model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAccount()** | **string** | The identifying address of this account, such as rf1BiGeXwwQoi8Z2ueFYTEXSwuJYfV2Jpn. | [optional]
**getBalance()** | **string** | The account's current XRP balance in drops, represented as a string. | [optional]
**getFlags()** | **float** | A bit-map of boolean flags enabled for this account. | [optional]
**getLedgerEntryType()** | **string** | The value 0x0061, mapped to the string AccountRoot, indicates that this is an AccountRoot object. | [optional]
**getOwnerCount()** | **float** | The number of objects this account owns in the ledger, which contributes to its owner reserve. | [optional]
**getPreviousTxnId()** | **string** | The identifying hash of the transaction that most recently modified this object. | [optional]
**getPreviousTxnLgrSeq()** | **float** | The index of the ledger that contains the transaction that most recently modified this object. | [optional]
**getSequence()** | **float** | The sequence number of the next valid transaction for this account. (Each account starts with Sequence = 1 and increases each time a transaction is made.) | [optional]
**getIndex()** | **string** |  | [optional]

