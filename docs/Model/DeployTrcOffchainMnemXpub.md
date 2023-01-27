---
title: DeployTrcOffchainMnemXpub
parent: Model
layout: page
---

# DeployTrcOffchainMnemXpub

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSymbol()** | **string** | The name of the token; used as an identifier within the Tatum platform and as a currency symbol on the blockchain | ex.: `MY_TOKEN`
**getSupply()** | **string** | The supply of the token | ex.: `10000000`
**getDecimals()** | **float** | The number of decimal places that the token has | ex.: `6`
**getType()** | **string** | The type of the token | ex.: `TRC10`
**getDescription()** | **string** | The description of the token; used as a description within the Tatum platform and as a currency name on the blockchain | ex.: `My Public Token`
**getXpub()** | **string** | The extended public key of the TRON wallet from which a deposit address for the virtual account will be generated | ex.: `0244b3f40c6e570ae0032f6d7be87737a6c4e5314a4a1a82e22d0460a0d0cd794936c61f0c80dc74ace4cd04690d4eeb1aa6555883be006e1748306faa7ed3a26a`
**getDerivationIndex()** | **int** | The derivation index to use together with the extended public key to generate the deposit address | ex.: `0`
**getMnemonic()** | **string** | The mnemonic of the TRON wallet to generate the private key for the blockchain address from which the fee for deploying the smart contract will be deducted; is used together with the derivation index of this address | ex.: `urge pulp usage sister evidence arrest palm math please chief egg abuse`
**getIndex()** | **int** | The derivation index of the blockchain address from which the fee for deploying the smart contract will be deducted; is used together with the mnemonic to generate the private key for this address | ex.: `0`
**getBasePair()** | **string** | The base pair for the virtual currency that represents the token; used to calculate the value of a transaction | ex.: `EUR`
**getBaseRate()** | **float** | The exchange rate for the base pair; one unit of the created virtual currency equals 1 unit of <code>basePair</code>*<code>baseRate</code> | ex.: `1` [optional] [default to 1]
**getUrl()** | **string** | (TRC-10 tokens only) The URL of the project that the token is created for<br/>Use this parameter only with TRC-10 tokens. Do <b>not</b> use this parameter with TRC-20 tokens. | ex.: `https://mytoken.com` [optional]
**getCustomer()** | [**\Tatum\Model\CustomerRegistration**](../CustomerRegistration) |  | ex.: `null` [optional]

