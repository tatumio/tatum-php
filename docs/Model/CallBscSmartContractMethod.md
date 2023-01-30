---
title: CallBscSmartContractMethod
parent: Model
layout: page
---

# CallBscSmartContractMethod

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getContractAddress()** | **string** | The address of the smart contract <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getMethodName()** | **string** | Name of the method to invoke on smart contract. <br>Example: `transfer` |
**getMethodAbi()** | **object** | ABI of the method to invoke. <br>Example: `{"inputs":[{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"stake","outputs":[],"stateMutability":"nonpayable","type":"function"}` |
**getParams()** | **string[]** |  <br>Example: `["0x632"]` |
**getAmount()** | **string** | Amount of the assets to be sent. <br>Example: `100000` | [optional]
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. <br>Example: `0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2` |
**getNonce()** | **float** | Nonce to be set to BSC transaction. If not present, last known nonce will be used. <br>Example: `null` | [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](../CustomFee) |  <br>Example: `null` | [optional]

