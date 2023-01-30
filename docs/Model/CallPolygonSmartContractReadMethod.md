---
title: CallPolygonSmartContractReadMethod
parent: Model
layout: page
---

# CallPolygonSmartContractReadMethod

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getContractAddress()** | **string** | The address of the smart contract <br>Example: `0xC9c8ba8C7e2EAF43e84330Db08915A8106d7bD74` |
**getMethodName()** | **string** | Name of the method to invoke on smart contract. <br>Example: `transfer` |
**getMethodAbi()** | **object** | ABI of the method to invoke. <br>Example: `{"inputs":[{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"stake","outputs":[],"stateMutability":"nonpayable","type":"function"}` |
**getParams()** | **string[]** |  <br>Example: `["0x632"]` |

