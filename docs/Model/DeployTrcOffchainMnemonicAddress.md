---
title: DeployTrcOffchainMnemonicAddress
parent: Model
layout: page
---

# DeployTrcOffchainMnemonicAddress

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSymbol()** | **string** | The name of the token; used as an identifier within the Tatum platform and as a currency symbol on the blockchain <br>Example: `MY_TOKEN` |
**getSupply()** | **string** | The supply of the token <br>Example: `10000000` |
**getDecimals()** | **float** | The number of decimal places that the token has <br>Example: `6` |
**getType()** | **string** | The type of the token <br>Example: `TRC10` |
**getDescription()** | **string** | The description of the token; used as a description within the Tatum platform and as a currency name on the blockchain <br>Example: `My Public Token` |
**getAddress()** | **string** | The blockchain address to be assigned to the virtual account as a deposit address <br>Example: `TVAEYCmc15awaDRAjUZ1kvcHwQQaoPw2CW` |
**getMnemonic()** | **string** | The mnemonic of the TRON wallet to generate the private key for the blockchain address from which the fee for deploying the smart contract will be deducted; is used together with the derivation index of this address <br>Example: `urge pulp usage sister evidence arrest palm math please chief egg abuse` |
**getIndex()** | **int** | The derivation index of the blockchain address from which the fee for deploying the smart contract will be deducted; is used together with the mnemonic to generate the private key for this address <br>Example: `0` |
**getBasePair()** | **string** | The base pair for the virtual currency that represents the token; used to calculate the value of a transaction <br>Example: `EUR` |
**getBaseRate()** | **float** | The exchange rate for the base pair; one unit of the created virtual currency equals 1 unit of <code>basePair</code>*<code>baseRate</code> <br>Example: `1` | [optional] [default to 1]
**getUrl()** | **string** | (TRC-10 tokens only) The URL of the project that the token is created for<br/>Use this parameter only with TRC-10 tokens. Do <b>not</b> use this parameter with TRC-20 tokens. <br>Example: `https://mytoken.com` | [optional]
**getCustomer()** | [**\Tatum\Model\CustomerRegistration**](../CustomerRegistration) |  <br>Example: `null` | [optional]

