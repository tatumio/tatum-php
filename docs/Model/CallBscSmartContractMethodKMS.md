---
title: CallBscSmartContractMethodKMS
parent: Model
layout: page
---

# CallBscSmartContractMethodKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getContractAddress()** | **string** | The address of the smart contract | ex.: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85`
**getMethodName()** | **string** | Name of the method to invoke on smart contract. | ex.: `transfer`
**getMethodAbi()** | **object** | ABI of the method to invoke. | ex.: `null`
**getParams()** | **string[]** | Parameters of the method to be invoked. | ex.: `[&quot;0x632&quot;]`
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | ex.: `null` [optional]
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. | ex.: `26d3883e-4e17-48b3-a0ee-09a3e484ac83`
**getNonce()** | **float** | Nonce to be set to BSC transaction. If not present, last known nonce will be used. | ex.: `null` [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](../CustomFee) |  | ex.: `null` [optional]

