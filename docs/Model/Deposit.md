---
title: Deposit
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getTxId()** | **string** |  |
**getAddress()** | **string** | Blockchain address. |
**getTimestamp()** | **float** | End interval in UTC millis. |
**getXpub()** | **string** | Extended public key to derive address from. |
**getDerivationKey()** | **int** | Derivation key index for given address. |
**getAmount()** | **string** | Amount of the trade |
**getStatus()** | **string** | Status of deposit |
**getAccountId()** | **string** | Account ID. |
**getCurrency()** | **string** | Currency |
**getReference()** | **string** |  |
**getVout()** | **float** |  |
**getSpent()** | **bool** |  |
**getBlockHeight()** | **float** | Block of deposit |
**getBlockHash()** | **string** | Hash of the block where this transaction was in. | [optional]
**getFrom()** | **string** | Blockchain address. | [optional]

