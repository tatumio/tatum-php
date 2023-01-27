---
title: TransferDogeMnemonic
parent: Model
layout: page
---

# TransferDogeMnemonic

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSenderAccountId()** | **string** | Sender account ID | ex.: `5e68c66581f2ee32bc354087`
**getAddress()** | **string** | Blockchain address to send assets to. For BTC, LTC, DOGE and BCH, it is possible to enter list of multiple recipient blockchain addresses as a comma separated string. | ex.: `mpTwPdF8up9kidgcAStriUPwRdnE9MRAg7`
**getAmount()** | **string** | Amount to be withdrawn to blockchain. | ex.: `0.001`
**getCompliant()** | **bool** | Compliance check, if withdrawal is not compliant, it will not be processed. | ex.: `false` [optional]
**getFee()** | **string** | Fee to be submitted as a transaction fee to blockchain. If none is set, default value of 1 DOGE is used. | ex.: `1` [optional]
**getMultipleAmounts()** | **string[]** | For BTC, LTC, DOGE and BCH, it is possible to enter list of multiple recipient blockchain amounts. List of recipient addresses must be present in the address field and total sum of amounts must be equal to the amount field. | ex.: `null` [optional]
**getAttr()** | **string** | Used to parametrize withdrawal as a change address for left coins from transaction. XPub or attr must be used. | ex.: `null` [optional]
**getMnemonic()** | **string** | Mnemonic seed - usually 12-24 words with access to whole wallet. Either mnemonic, keyPair or signature Id must be present - depends on the type of account and xpub. Tatum KMS does not support keyPair type of off-chain transaction, only mnemonic based. | ex.: `urge pulp usage sister evidence arrest palm math please chief egg abuse`
**getXpub()** | **string** | Extended public key (xpub) of the wallet associated with the accounts. Should be present, when mnemonic is used. | ex.: `xpub6EsCk1uU6cJzqvP9CdsTiJwT2rF748YkPnhv5Qo8q44DG7nn2vbyt48YRsNSUYS44jFCW9gwvD9kLQu9AuqXpTpM1c5hgg9PsuBLdeNncid`
**getPaymentId()** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. | ex.: `1234` [optional]
**getSenderNote()** | **string** | Note visible to owner of withdrawing account | ex.: `Sender note` [optional]

