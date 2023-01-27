---
title: ChainCallSmartContractMethod
parent: Model
layout: page
---

# ChainCallSmartContractMethod

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with | ex.: `ETH`
**getContractAddress()** | **string** | Address of ERC20 token | ex.: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85`
**getMethodName()** | **string** | Name of the method to invoke on smart contract. | ex.: `transfer`
**getMethodAbi()** | **object** | ABI of the method to invoke. | ex.: `null`
**getParams()** | **string[]** | Parameters of the method to be invoked. | ex.: `[&quot;0x632&quot;]`
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. | ex.: `0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2`
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | ex.: `null` [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](../CustomFee) |  | ex.: `null` [optional]

