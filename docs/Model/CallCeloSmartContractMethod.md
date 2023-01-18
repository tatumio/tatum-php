---
title: CallCeloSmartContractMethod
parent: Model
layout: page
---

# CallCeloSmartContractMethod model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getContractAddress()** | **string** | The address of the smart contract |
**getMethodName()** | **string** | Name of the method to invoke on smart contract. |
**getMethodAbi()** | **object** | ABI of the method to invoke. |
**getParams()** | **string[]** | Parameters of the method to be invoked. |
**getAmount()** | **string** | Amount of the assets to be sent. | [optional]
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**getNonce()** | **float** | Nonce to be set to transaction. If not present, last known nonce will be used. | [optional]
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](../DeployErc20Fee) |  | [optional]
**getFeeCurrency()** | **string** | Currency to pay for transaction gas |

