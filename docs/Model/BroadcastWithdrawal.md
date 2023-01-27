---
title: BroadcastWithdrawal
parent: Model
layout: page
---

# BroadcastWithdrawal

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getCurrency()** | **string** | Currency of signed transaction to be broadcast, BTC, LTC, DOGE, BNB, XLM, TRX, BCH, ETH, XRP, ERC20, TRC20 <br>Example: `BTC` |
**getTxData()** | **string** | Raw signed transaction to be published to network. <br>Example: `62BD544D1B9031EFC330A3E855CC3A0D51CA5131455C1AB3BCAC6D243F65460D` |
**getWithdrawalId()** | **string** | Withdrawal ID to be completed by transaction broadcast <br>Example: `5e68c66581f2ee32bc354087` | [optional]
**getSignatureId()** | **string** | ID of prepared payment template to sign. This is should be stored on a client side to retrieve ID of the blockchain transaction, when signing application signs the transaction and broadcasts it to the blockchain. <br>Example: `1f7f7c0c-3906-4aa1-9dfe-4b67c43918f6` | [optional]

