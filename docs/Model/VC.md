---
title: VC
parent: Model
layout: page
---

# VC

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getName()** | **string** | Virtual currency name. Must be prefixed with 'VC_'. | ex.: `VC_VIRTUAL`
**getSupply()** | **string** | Supply of virtual currency. | ex.: `1000000`
**getAccountId()** | **string** | Virtual currency account. | ex.: `5e68c66581f2ee32bc354087`
**getBaseRate()** | **float** | Exchange rate of the base pair. Each unit of the created curency will represent value of baseRate*1 basePair. | ex.: `null` [default to 1]
**getPrecision()** | **float** | Number of decimal places of this virtual currency. | ex.: `6` [optional]
**getTrcType()** | **string** | Type of Tron token. | ex.: `TRC20` [optional]
**getBasePair()** | **string** | Base pair for virtual currency. Transaction value will be calculated according to this base pair. e.g. 1 VC_VIRTUAL is equal to 1 BTC, if basePair is set to BTC. | ex.: `BTC`
**getCustomerId()** | **string** | ID of customer associated with virtual currency. | ex.: `5e68c66581f2ee32bc354087` [optional]
**getDescription()** | **string** | Used as a description within Tatum system. | ex.: `My Virtual Token description.` [optional]
**getErc20Address()** | **string** | Address of ERC20 token, when virtual currency is based on the Ethereum blockchain. | ex.: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` [optional]
**getIssuerAccount()** | **string** | Blockchain account for XLM or XRP based virtual currencies, which is marked as the issuer of the custom blockchain asset. | ex.: `GDKYMXOAJ5MK4EVIHHNWRGAAOUZMNZYAETMHFCD6JCVBPZ77TUAZFPKT` [optional]
**getChain()** | **string** | Blockchain, on which this virtual currency is paired on. Not present, when Tatum's private ledger is used as a base ledger. | ex.: `ETH` [optional]
**getInitialAddress()** | **string** | Ethereum address, where initial supply was minted, when virtual currency is based on the Ethereum blockchain. | ex.: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` [optional]

