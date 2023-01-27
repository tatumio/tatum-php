---
title: OffchainEstimateFee
parent: Model
layout: page
---

# OffchainEstimateFee

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSenderAccountId()** | **string** | Sender account ID <br>Example: `5e68c66581f2ee32bc354087` |
**getAddress()** | **string** | Blockchain address to send assets to. For BTC, LTC, and DOGE, it is possible to enter list of multiple recipient blockchain addresses as a comma separated string. <br>Example: `mpTwPdF8up9kidgcAStriUPwRdnE9MRAg7` |
**getAmount()** | **string** | Amount to be withdrawn to blockchain. <br>Example: `0.001` |
**getMultipleAmounts()** | **string[]** | For BTC, LTC, and DOGE, it is possible to enter list of multiple recipient blockchain amounts. List of recipient addresses must be present in the address field and total sum of amounts must be equal to the amount field. <br>Example: `null` | [optional]
**getAttr()** | **string** | Used to parametrize withdrawal as a change address for left coins from transaction. XPub or attr must be used. <br>Example: `null` | [optional]
**getXpub()** | **string** | Extended public key (xpub) of the wallet associated with the accounts. <br>Example: `xpub6EsCk1uU6cJzqvP9CdsTiJwT2rF748YkPnhv5Qo8q44DG7nn2vbyt48YRsNSUYS44jFCW9gwvD9kLQu9AuqXpTpM1c5hgg9PsuBLdeNncid` | [optional]

