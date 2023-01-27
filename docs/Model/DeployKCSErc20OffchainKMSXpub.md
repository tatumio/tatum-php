---
title: DeployKCSErc20OffchainKMSXpub
parent: Model
layout: page
---

# DeployKCSErc20OffchainKMSXpub

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSymbol()** | **string** | Name of the ERC20 token - stored as a symbol on Blockchain <br>Example: `MT` |
**getSupply()** | **string** | max supply of ERC20 token. <br>Example: `10000000` |
**getDescription()** | **string** | Description of the ERC20 token <br>Example: `My ERC20 Token` |
**getBasePair()** | **string** | Base pair for ERC20 token. 1 token will be equal to 1 unit of base pair. Transaction value will be calculated according to this base pair. <br>Example: `EUR` |
**getBaseRate()** | **float** | Exchange rate of the base pair. Each unit of the created curency will represent value of baseRate*1 basePair. <br>Example: `1` | [optional] [default to 1]
**getCustomer()** | [**\Tatum\Model\CustomerRegistration**](../CustomerRegistration) |  <br>Example: `null` | [optional]
**getXpub()** | **string** | Extended public key (xpub), from which address, where all initial supply will be stored, will be generated. Either xpub and derivationIndex, or address must be present, not both. <br>Example: `xpub6EsCk1uU6cJzqvP9CdsTiJwT2rF748YkPnhv5Qo8q44DG7nn2vbyt48YRsNSUYS44jFCW9gwvD9kLQu9AuqXpTpM1c5hgg9PsuBLdeNncid` |
**getDerivationIndex()** | **int** | Derivation index for xpub to generate specific deposit address. <br>Example: `0` |
**getSignatureId()** | **string** | Identifier of the mnemonic / private key associated in signing application. When hash identifies mnemonic, index must be present to represent specific account to pay from. Private key, mnemonic or signature Id must be present. <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used <br>Example: `null` | [optional]

