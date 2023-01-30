---
title: CallKcsSmartContractReadMethod
parent: Model
layout: page
---

# CallKcsSmartContractReadMethod

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getContractAddress()** | **string** | The address of the smart contract <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getMethodName()** | **string** | Name of the method to invoke on smart contract. <br>Example: `transfer` |
**getMethodAbi()** | **object** | ABI of the method to invoke. <br>Example: `{"inputs":[{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"stake","outputs":[],"stateMutability":"nonpayable","type":"function"}` |
**getParams()** | **string[]** |  <br>Example: `["0x632"]` |

