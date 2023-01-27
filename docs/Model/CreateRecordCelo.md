---
title: CreateRecordCelo
parent: Model
layout: page
---

# CreateRecordCelo

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getData()** | **string** | The data to be stored on the blockchain <br>Example: `My example log data` |
**getChain()** | **string** | The blockchain to store the data on <br>Example: `CELO` |
**getFromPrivateKey()** | **string** | The private key of the blockchain address from which the transaction will be made and the transaction fee will be deducted <br>Example: `0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2` |
**getFeeCurrency()** | **string** | The currency in which the transaction fee will be paid <br>Example: `null` |
**getTo()** | **string** | The blockchain address to store the data on<br/>If not provided, the data will be stored on the address from which the transaction is made. <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` | [optional]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used <br>Example: `null` | [optional]

