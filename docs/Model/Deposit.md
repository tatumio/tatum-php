---
title: Deposit
parent: Model
layout: page
---

# Deposit

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getTxId()** | **string** |  | ex.: `6498A3BE7313FEF32C9C0130F321D7808439F7F59D41932122383CC9E109F534`
**getAddress()** | **string** | Blockchain address. | ex.: `7c21ed165e294db78b95f0f181086d6f`
**getTimestamp()** | **float** | End interval in UTC millis. | ex.: `1613654998398`
**getXpub()** | **string** | Extended public key to derive address from. | ex.: `xpub6FB4LJzdKNkkpsjggFAGS2p34G48pqjtmSktmK2Ke3k1LKqm9ULsg8bGfDakYUrdhe2EHw5uGKX9DrMbrgYnVfDwrksT4ZVQ3vmgEruo3Ka`
**getDerivationKey()** | **int** | Derivation key index for given address. | ex.: `null`
**getAmount()** | **string** | Amount of the trade | ex.: `15000`
**getStatus()** | **string** | Status of deposit | ex.: `Done`
**getAccountId()** | **string** | Account ID. | ex.: `5e68c66581f2ee32bc354087`
**getCurrency()** | **string** | Currency | ex.: `BTC`
**getReference()** | **string** |  | ex.: `some reference`
**getVout()** | **float** |  | ex.: `0`
**getSpent()** | **bool** |  | ex.: `null`
**getBlockHeight()** | **float** | Block of deposit | ex.: `228232166`
**getBlockHash()** | **string** | Hash of the block where this transaction was in. | ex.: `0xcf2c40f475e78c7c19778e1ae999a0e371c9319b38182ea15dc94536f13f9137` [optional]
**getFrom()** | **string** | Blockchain address. | ex.: `7c21ed165e294db78b95f0f181086d6f` [optional]

