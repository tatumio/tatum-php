---
title: Erc20Address
parent: Model
layout: page
---

# Erc20Address

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSymbol()** | **string** | The name of the token; used as an identifier within the Tatum platform and as a currency symbol on the blockchain<br/>The token name that you specify here must be the same as the token name in the <code>symbol</code> parameter of the smart contract that you <a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20Deploy" target="_blank">are going to deploy or have already deployed</a> for this token. <br>Example: `MY_TOKEN` |
**getSupply()** | **string** | The supply of the token <br>Example: `1000000.0` |
**getDecimals()** | **float** | The number of decimal places that the token has <br>Example: `8` |
**getDescription()** | **string** | The description of the token; used as a description within the Tatum platform and as a currency name on the blockchain <br>Example: `My Public Token` |
**getAddress()** | **string** | The blockchain address to be assigned to the virtual account as a deposit address <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getBasePair()** | **string** | The base pair for the virtual currency that represents the token; used to calculate the value of a transaction <br>Example: `EUR` |
**getBaseRate()** | **float** | The exchange rate for the base pair; one unit of the created virtual currency equals 1 unit of <code>basePair</code>*<code>baseRate</code> <br>Example: `1` | [optional] [default to 1]
**getCustomer()** | [**\Tatum\Model\CustomerRegistration**](../CustomerRegistration) |  <br>Example: `null` | [optional]
**getAccountingCurrency()** | **string** | AThe ISO 4217 code of the currency in which all transactions for the created virtual account will be billed <br>Example: `USD` | [optional] [default to 'EUR']

