---
title: DeployCeloErc20OffchainMnemonicAddress
parent: Model
layout: page
---

# DeployCeloErc20OffchainMnemonicAddress

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFeeCurrency()** | **string** | The currency in which the transaction fee will be paid <br>Example: `null` |
**getSymbol()** | **string** | The name of the token; used as an identifier within the Tatum platform and as a currency symbol on the blockchain <br>Example: `MY_TOKEN` |
**getSupply()** | **string** | The supply of the token <br>Example: `10000000` |
**getDescription()** | **string** | The description of the token; used as a description within the Tatum platform and as a currency name on the blockchain <br>Example: `My Public Token` |
**getAddress()** | **string** | The blockchain address to be assigned to the virtual account as a deposit address <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getMnemonic()** | **string** | The mnemonic to generate the private key for the blockchain address from which the fee for deploying the smart contract will be deducted; is used together with the derivation index of this address <br>Example: `urge pulp usage sister evidence arrest palm math please chief egg abuse` |
**getIndex()** | **int** | The derivation index of the blockchain address from which the fee for deploying the smart contract will be deducted; is used together with the mnemonic to generate the private key for this address <br>Example: `0` |
**getBasePair()** | **string** | The base pair for the virtual currency that represents the token; used to calculate the value of a transaction <br>Example: `EUR` |
**getBaseRate()** | **float** | The exchange rate for the base pair; one unit of the created virtual currency equals 1 unit of <code>basePair</code>*<code>baseRate</code> <br>Example: `1` | [optional] [default to 1]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used <br>Example: `null` | [optional]
**getCustomer()** | [**\Tatum\Model\CustomerRegistration**](../CustomerRegistration) |  <br>Example: `null` | [optional]

