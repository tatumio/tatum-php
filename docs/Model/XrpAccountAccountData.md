---
title: XrpAccountAccountData
parent: Model
layout: page
---

# XrpAccountAccountData

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAccount()** | **string** | The identifying address of this account, such as rf1BiGeXwwQoi8Z2ueFYTEXSwuJYfV2Jpn. | ex.: `rf1BiGeXwwQoi8Z2ueFYTEXSwuJYfV2Jpn` [optional]
**getBalance()** | **string** | The account's current XRP balance in drops, represented as a string. | ex.: `1000000000` [optional]
**getFlags()** | **float** | A bit-map of boolean flags enabled for this account. | ex.: `0` [optional]
**getLedgerEntryType()** | **string** | The value 0x0061, mapped to the string AccountRoot, indicates that this is an AccountRoot object. | ex.: `AccountRoot` [optional]
**getOwnerCount()** | **float** | The number of objects this account owns in the ledger, which contributes to its owner reserve. | ex.: `0` [optional]
**getPreviousTxnId()** | **string** | The identifying hash of the transaction that most recently modified this object. | ex.: `1A32A054B04AC9D6814710DDCA416E72C4CD2D78D6C3DFC06CC9369CC4F6B250` [optional]
**getPreviousTxnLgrSeq()** | **float** | The index of the ledger that contains the transaction that most recently modified this object. | ex.: `760469` [optional]
**getSequence()** | **float** | The sequence number of the next valid transaction for this account. (Each account starts with Sequence = 1 and increases each time a transaction is made.) | ex.: `1` [optional]
**getIndex()** | **string** |  | ex.: `BB899D5C7C5E13AFFD702514FC78BE59313AC72AF02A3FC94E5F54F05EB2E20D` [optional]

