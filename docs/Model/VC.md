---
title: VC
parent: Model
layout: page
---

# VC

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getName()** | **string** | Virtual currency name. Must be prefixed with 'VC_'. <br>Example: `VC_VIRTUAL` |
**getSupply()** | **string** | Supply of virtual currency. <br>Example: `1000000` |
**getAccountId()** | **string** | Virtual currency account. <br>Example: `5e68c66581f2ee32bc354087` |
**getBaseRate()** | **float** | Exchange rate of the base pair. Each unit of the created curency will represent value of baseRate*1 basePair. <br>Example: `null` | [default to 1]
**getPrecision()** | **float** | Number of decimal places of this virtual currency. <br>Example: `6` | [optional]
**getTrcType()** | **string** | Type of Tron token. <br>Example: `TRC20` | [optional]
**getBasePair()** | **string** | Base pair for virtual currency. Transaction value will be calculated according to this base pair. e.g. 1 VC_VIRTUAL is equal to 1 BTC, if basePair is set to BTC. <br>Example: `BTC` |
**getCustomerId()** | **string** | ID of customer associated with virtual currency. <br>Example: `5e68c66581f2ee32bc354087` | [optional]
**getDescription()** | **string** | Used as a description within Tatum system. <br>Example: `My Virtual Token description.` | [optional]
**getErc20Address()** | **string** | Address of ERC20 token, when virtual currency is based on the Ethereum blockchain. <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` | [optional]
**getIssuerAccount()** | **string** | Blockchain account for XLM or XRP based virtual currencies, which is marked as the issuer of the custom blockchain asset. <br>Example: `GDKYMXOAJ5MK4EVIHHNWRGAAOUZMNZYAETMHFCD6JCVBPZ77TUAZFPKT` | [optional]
**getChain()** | **string** | Blockchain, on which this virtual currency is paired on. Not present, when Tatum's private ledger is used as a base ledger. <br>Example: `ETH` | [optional]
**getInitialAddress()** | **string** | Ethereum address, where initial supply was minted, when virtual currency is based on the Ethereum blockchain. <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` | [optional]

