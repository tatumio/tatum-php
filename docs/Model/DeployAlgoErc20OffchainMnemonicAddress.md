---
title: DeployAlgoErc20OffchainMnemonicAddress
parent: Model
layout: page
---

# DeployAlgoErc20OffchainMnemonicAddress model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSymbol()** | **string** | The name of the token; used as an identifier within the Tatum platform and as a currency symbol on the blockchain |
**getSupply()** | **string** | The supply of the token |
**getDescription()** | **string** | The description of the token; used as a description within the Tatum platform and as a currency name on the blockchain |
**getAddress()** | **string** | The blockchain address to be assigned to the virtual account as a deposit address |
**getMnemonic()** | **string** | The mnemonic to generate the private key for the blockchain address from which the fee for deploying the smart contract will be deducted; is used together with the derivation index of this address |
**getIndex()** | **int** | The derivation index of the blockchain address from which the fee for deploying the smart contract will be deducted; is used together with the mnemonic to generate the private key for this address |
**getBasePair()** | **string** | The base pair for the virtual currency that represents the token; used to calculate the value of a transaction |
**getBaseRate()** | **float** | The exchange rate for the base pair; one unit of the created virtual currency equals 1 unit of <code>basePair</code>*<code>baseRate</code> | [optional] [default to 1]
**getCustomer()** | [**\Tatum\Model\CustomerRegistration**](../CustomerRegistration) |  | [optional]

