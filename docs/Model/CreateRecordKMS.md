---
title: CreateRecordKMS
parent: Model
layout: page
---

# CreateRecordKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getData()** | **string** | The data to be stored on the blockchain <br>Example: `My example log data` |
**getChain()** | **string** | The blockchain to store the data on <br>Example: `ETH` |
**getSignatureId()** | **string** | Identifier of the mnemonic / private key associated in signing application. When hash identifies mnemonic, index must be present to represent specific account to pay from. <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |
**getIndex()** | **int** | Derivation index of sender address. <br>Example: `0` | [optional]
**getTo()** | **string** | The blockchain address to store the data on<br/>If not provided, the data will be stored on the address from which the transaction is made. <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` | [optional]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used <br>Example: `null` | [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](../CustomFee) |  <br>Example: `null` | [optional]

