---
title: CallPolygonSmartContractMethod
parent: Model
layout: page
---

# CallPolygonSmartContractMethod

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getContractAddress()** | **string** | The address of the smart contract <br>Example: `0xC9c8ba8C7e2EAF43e84330Db08915A8106d7bD74` |
**getAmount()** | **string** | Amount of the assets to be sent. <br>Example: `100000` | [optional]
**getMethodName()** | **string** | Name of the method to invoke on smart contract. <br>Example: `transfer` |
**getMethodAbi()** | **object** | ABI of the method to invoke. <br>Example: `{"inputs":[{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"stake","outputs":[],"stateMutability":"nonpayable","type":"function"}` |
**getParams()** | **string[]** |  <br>Example: `["0x632"]` |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. <br>Example: `0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2` |
**getNonce()** | **float** | Nonce to be set to Polygon transaction. If not present, last known nonce will be used. <br>Example: `null` | [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](../CustomFee) |  <br>Example: `null` | [optional]

