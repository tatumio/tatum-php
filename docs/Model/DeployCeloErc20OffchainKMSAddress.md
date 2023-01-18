---
title: DeployCeloErc20OffchainKMSAddress
parent: Model
layout: page
---

# DeployCeloErc20OffchainKMSAddress model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFeeCurrency()** | **string** | The currency in which the transaction fee will be paid |
**getSymbol()** | **string** | The name of the token; used as an identifier within the Tatum platform and as a currency symbol on the blockchain |
**getSupply()** | **string** | The supply of the token |
**getDescription()** | **string** | The description of the token; used as a description within the Tatum platform and as a currency name on the blockchain |
**getAddress()** | **string** | The blockchain address to be assigned to the virtual account as a deposit address |
**getSignatureId()** | **string** | The KMS identifier of either the <b>private key</b> of the blockchain address from which the fee for deploying the smart contract will be deducted, or the <b>mnemonic</b> to generate the private key for the blockchain address from which the fee will be deducted |
**getIndex()** | **float** | (Only if the signature ID is mnemonic-based) The index of the address from which the fee will be deducted that was generated from the mnemonic | [optional]
**getBasePair()** | **string** | The base pair for the virtual currency that represents the token; used to calculate the value of a transaction |
**getBaseRate()** | **float** | The exchange rate for the base pair; one unit of the created virtual currency equals 1 unit of <code>basePair</code>*<code>baseRate</code> | [optional] [default to 1]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**getCustomer()** | [**\Tatum\Model\CustomerRegistration**](../CustomerRegistration) |  | [optional]

