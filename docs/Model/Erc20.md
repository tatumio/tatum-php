---
title: Erc20
parent: Model
layout: page
---

# Erc20

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSymbol()** | **string** | The name of the token; used as an identifier within the Tatum platform and as a currency symbol on the blockchain<br/>The token name that you specify here must be the same as the token name in the <code>symbol</code> parameter of the smart contract that you <a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20Deploy" target="_blank">are going to deploy or have already deployed</a> for this token. <br>Example: `MY_TOKEN` |
**getSupply()** | **string** | The supply of the token <br>Example: `1000000.0` |
**getDecimals()** | **float** | The number of decimal places that the token has <br>Example: `8` |
**getDescription()** | **string** | The description of the token; used as a description within the Tatum platform and as a currency name on the blockchain <br>Example: `My Public Token` |
**getXpub()** | **string** | The extended public key of the wallet from which a deposit address for the virtual account will be generated<br/><b>NOTE:</b> On Solana, you only can assign an existing address to the virtual account; use the <code>Erc20Address</code> schema of this API. <br>Example: `xpub6EsCk1uU6cJzqvP9CdsTiJwT2rF748YkPnhv5Qo8q44DG7nn2vbyt48YRsNSUYS44jFCW9gwvD9kLQu9AuqXpTpM1c5hgg9PsuBLdeNncid` |
**getDerivationIndex()** | **int** | The derivation index to use together with the extended public key to generate the deposit address <br>Example: `0` |
**getBasePair()** | **string** | The base pair for the virtual currency that represents the token; used to calculate the value of a transaction <br>Example: `EUR` |
**getBaseRate()** | **float** | The exchange rate for the base pair; one unit of the created virtual currency equals 1 unit of <code>basePair</code>*<code>baseRate</code> <br>Example: `1` | [optional] [default to 1]
**getCustomer()** | [**\Tatum\Model\CustomerRegistration**](../CustomerRegistration) |  <br>Example: `null` | [optional]
**getAccountingCurrency()** | **string** | The ISO 4217 code of the currency in which all transactions for the created virtual account will be billed <br>Example: `USD` | [optional] [default to 'EUR']

