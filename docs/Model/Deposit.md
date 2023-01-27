---
title: Deposit
parent: Model
layout: page
---

# Deposit

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getTxId()** | **string** |  <br>Example: `6498A3BE7313FEF32C9C0130F321D7808439F7F59D41932122383CC9E109F534` |
**getAddress()** | **string** | Blockchain address. <br>Example: `7c21ed165e294db78b95f0f181086d6f` |
**getTimestamp()** | **float** | End interval in UTC millis. <br>Example: `1613654998398` |
**getXpub()** | **string** | Extended public key to derive address from. <br>Example: `xpub6FB4LJzdKNkkpsjggFAGS2p34G48pqjtmSktmK2Ke3k1LKqm9ULsg8bGfDakYUrdhe2EHw5uGKX9DrMbrgYnVfDwrksT4ZVQ3vmgEruo3Ka` |
**getDerivationKey()** | **int** | Derivation key index for given address. <br>Example: `null` |
**getAmount()** | **string** | Amount of the trade <br>Example: `15000` |
**getStatus()** | **string** | Status of deposit <br>Example: `Done` |
**getAccountId()** | **string** | Account ID. <br>Example: `5e68c66581f2ee32bc354087` |
**getCurrency()** | **string** | Currency <br>Example: `BTC` |
**getReference()** | **string** |  <br>Example: `some reference` |
**getVout()** | **float** |  <br>Example: `0` |
**getSpent()** | **bool** |  <br>Example: `null` |
**getBlockHeight()** | **float** | Block of deposit <br>Example: `228232166` |
**getBlockHash()** | **string** | Hash of the block where this transaction was in. <br>Example: `0xcf2c40f475e78c7c19778e1ae999a0e371c9319b38182ea15dc94536f13f9137` | [optional]
**getFrom()** | **string** | Blockchain address. <br>Example: `7c21ed165e294db78b95f0f181086d6f` | [optional]

