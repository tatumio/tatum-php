---
title: CallOneSmartContractMethod
parent: Model
layout: page
---

# CallOneSmartContractMethod model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getContractAddress()** | **string** | The address of the smart contract |
**getAmount()** | **string** | Amount of the assets to be sent. | [optional]
**getMethodName()** | **string** | Name of the method to invoke on smart contract. |
**getMethodAbi()** | **object** | ABI of the method to invoke. |
**getParams()** | **string[]** |  |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**getNonce()** | **float** | Nonce to be set to ONE transaction. If not present, last known nonce will be used. | [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](../CustomFee) |  | [optional]

