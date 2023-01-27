---
title: TrcXpub
parent: Model
layout: page
---

# TrcXpub

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSymbol()** | **string** | The name of the token; used as an identifier within the Tatum platform and as a currency symbol on the blockchain | ex.: `MY_TOKEN`
**getSupply()** | **string** | The supply of the token | ex.: `1000000.0`
**getDecimals()** | **float** | The number of decimal places that the token has | ex.: `6`
**getType()** | **string** | The type of the token | ex.: `TRC10`
**getDescription()** | **string** | The description of the token; used as a description within the Tatum platform and as a currency name on the blockchain | ex.: `My Public Token`
**getXpub()** | **string** | The extended public key of the TRON wallet from which a deposit address for the virtual account will be generated | ex.: `xpub6EsCk1uU6cJzqvP9CdsTiJwT2rF748YkPnhv5Qo8q44DG7nn2vbyt48YRsNSUYS44jFCW9gwvD9kLQu9AuqXpTpM1c5hgg9PsuBLdeNncid`
**getDerivationIndex()** | **int** | The derivation index to use together with the extended public key to generate the deposit address | ex.: `0`
**getBasePair()** | **string** | The base pair for the virtual currency that represents the token; used to calculate the value of a transaction | ex.: `EUR`
**getBaseRate()** | **float** | The exchange rate for the base pair; one unit of the created virtual currency equals 1 unit of <code>basePair</code>*<code>baseRate</code> | ex.: `1` [optional] [default to 1]
**getUrl()** | **string** | (TRC-10 tokens only) The URL of the project that the token is created for<br/>Use this parameter only with TRC-10 tokens. Do <b>not</b> use this parameter with TRC-20 tokens. | ex.: `https://mytoken.com` [optional]
**getCustomer()** | [**\Tatum\Model\CustomerRegistration**](../CustomerRegistration) |  | ex.: `null` [optional]
**getAccountingCurrency()** | **string** | The ISO 4217 code of the currency in which all transactions for the created virtual account will be billed | ex.: `USD` [optional] [default to 'EUR']

