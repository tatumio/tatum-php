---
title: DeployKCSErc20OffchainMnemXpub
parent: Model
layout: page
---

# DeployKCSErc20OffchainMnemXpub

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSymbol()** | **string** | Name of the ERC20 token - stored as a symbol on Blockchain | ex.: `MT`
**getSupply()** | **string** | max supply of ERC20 token. | ex.: `10000000`
**getDescription()** | **string** | Description of the ERC20 token | ex.: `My ERC20 Token`
**getBasePair()** | **string** | Base pair for ERC20 token. 1 token will be equal to 1 unit of base pair. Transaction value will be calculated according to this base pair. | ex.: `EUR`
**getBaseRate()** | **float** | Exchange rate of the base pair. Each unit of the created curency will represent value of baseRate*1 basePair. | ex.: `1` [optional] [default to 1]
**getCustomer()** | [**\Tatum\Model\CustomerRegistration**](../CustomerRegistration) |  | ex.: `null` [optional]
**getXpub()** | **string** | Extended public key (xpub), from which address, where all initial supply will be stored, will be generated. Either xpub and derivationIndex, or address must be present, not both. | ex.: `xpub6EsCk1uU6cJzqvP9CdsTiJwT2rF748YkPnhv5Qo8q44DG7nn2vbyt48YRsNSUYS44jFCW9gwvD9kLQu9AuqXpTpM1c5hgg9PsuBLdeNncid`
**getDerivationIndex()** | **int** | Derivation index for xpub to generate specific deposit address. | ex.: `0`
**getMnemonic()** | **string** | Mnemonic to generate private key for the deploy account of ERC20, from which the gas will be paid (index will be used). If address is not present, mnemonic is used to generate xpub and index is set to 1. Either mnemonic and index or privateKey and address must be present, not both. | ex.: `urge pulp usage sister evidence arrest palm math please chief egg abuse`
**getIndex()** | **int** | derivation index of address to pay for deployment of ERC20 | ex.: `0`
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | ex.: `null` [optional]

