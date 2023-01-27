---
title: DeployTrcOffchainKMSXpub
parent: Model
layout: page
---

# DeployTrcOffchainKMSXpub

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSymbol()** | **string** | The name of the token; used as an identifier within the Tatum platform and as a currency symbol on the blockchain <br>Example: `MY_TOKEN` |
**getSupply()** | **string** | The supply of the token <br>Example: `10000000` |
**getDecimals()** | **float** | The number of decimal places that the token has <br>Example: `6` |
**getType()** | **string** | The type of the token <br>Example: `TRC10` |
**getDescription()** | **string** | The description of the token; used as a description within the Tatum platform and as a currency name on the blockchain <br>Example: `My Public Token` |
**getXpub()** | **string** | The extended public key of the TRON wallet from which a deposit address for the virtual account will be generated <br>Example: `0244b3f40c6e570ae0032f6d7be87737a6c4e5314a4a1a82e22d0460a0d0cd794936c61f0c80dc74ace4cd04690d4eeb1aa6555883be006e1748306faa7ed3a26a` |
**getDerivationIndex()** | **int** | The derivation index to use together with the extended public key to generate the deposit address <br>Example: `0` |
**getFrom()** | **string** | The blockchain address from which the fee for deploying the smart contract will be deducted <br>Example: `null` |
**getSignatureId()** | **string** | The KMS identifier of either the <b>private key</b> of the blockchain address from which the fee for deploying the smart contract will be deducted, or the <b>mnemonic</b> of the TRON wallet to generate the private key for the blockchain address from which the fee will be deducted <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |
**getIndex()** | **float** | (Only if the signature ID is mnemonic-based) The index of the address from which the fee will be deducted that was generated from the mnemonic <br>Example: `null` | [optional]
**getBasePair()** | **string** | The base pair for the virtual currency that represents the token; used to calculate the value of a transaction <br>Example: `EUR` |
**getBaseRate()** | **float** | The exchange rate for the base pair; one unit of the created virtual currency equals 1 unit of <code>basePair</code>*<code>baseRate</code> <br>Example: `1` | [optional] [default to 1]
**getUrl()** | **string** | (TRC-10 tokens only) The URL of the project that the token is created for<br/>Use this parameter only with TRC-10 tokens. Do <b>not</b> use this parameter with TRC-20 tokens. <br>Example: `https://mytoken.com` | [optional]
**getCustomer()** | [**\Tatum\Model\CustomerRegistration**](../CustomerRegistration) |  <br>Example: `null` | [optional]

