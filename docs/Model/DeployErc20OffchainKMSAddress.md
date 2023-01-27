---
title: DeployErc20OffchainKMSAddress
parent: Model
layout: page
---

# DeployErc20OffchainKMSAddress

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSymbol()** | **string** | The name of the token; used as an identifier within the Tatum platform and as a currency symbol on the blockchain | ex.: `MY_TOKEN`
**getSupply()** | **string** | The supply of the token | ex.: `10000000`
**getDescription()** | **string** | The description of the token; used as a description within the Tatum platform and as a currency name on the blockchain | ex.: `My Public Token`
**getAddress()** | **string** | The blockchain address to be assigned to the virtual account as a deposit address | ex.: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85`
**getSignatureId()** | **string** | The KMS identifier of either the <b>private key</b> of the blockchain address from which the fee for deploying the smart contract will be deducted, or the <b>mnemonic</b> to generate the private key for the blockchain address from which the fee will be deducted | ex.: `26d3883e-4e17-48b3-a0ee-09a3e484ac83`
**getIndex()** | **float** | (Only if the signature ID is mnemonic-based) The index of the address from which the fee will be deducted that was generated from the mnemonic | ex.: `null` [optional]
**getBasePair()** | **string** | The base pair for the virtual currency that represents the token; used to calculate the value of a transaction | ex.: `EUR`
**getBaseRate()** | **float** | The exchange rate for the base pair; one unit of the created virtual currency equals 1 unit of <code>basePair</code>*<code>baseRate</code> | ex.: `1` [optional] [default to 1]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | ex.: `null` [optional]
**getCustomer()** | [**\Tatum\Model\CustomerRegistration**](../CustomerRegistration) |  | ex.: `null` [optional]

