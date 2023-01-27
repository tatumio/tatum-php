---
title: CallSmartContractMethod
parent: Model
layout: page
---

# CallSmartContractMethod

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getContractAddress()** | **string** | The address of the smart contract <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getMethodName()** | **string** | Name of the method to invoke on smart contract. <br>Example: `transfer` |
**getMethodAbi()** | **object** | ABI of the method to invoke. <br>Example: `{&quot;inputs&quot;:[{&quot;internalType&quot;:&quot;uint256&quot;,&quot;name&quot;:&quot;amount&quot;,&quot;type&quot;:&quot;uint256&quot;}],&quot;name&quot;:&quot;stake&quot;,&quot;outputs&quot;:[],&quot;stateMutability&quot;:&quot;nonpayable&quot;,&quot;type&quot;:&quot;function&quot;}` |
**getParams()** | **object[]** | Parameters of the method to be invoked. <br>Example: `[&quot;0x632&quot;]` |
**getAmount()** | **string** | Amount of the assets to be sent. <br>Example: `100000` | [optional]
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. <br>Example: `0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2` |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used <br>Example: `null` | [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](../CustomFee) |  <br>Example: `null` | [optional]

