---
title: CallPolygonSmartContractMethodCaller
parent: Model
layout: page
---

# CallPolygonSmartContractMethodCaller

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getCaller()** | **string** | The address of the account, which will be sender and fee payer of this transaction <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getContractAddress()** | **string** | The address of the smart contract <br>Example: `0xC9c8ba8C7e2EAF43e84330Db08915A8106d7bD74` |
**getAmount()** | **string** | Amount of the assets to be sent. <br>Example: `100000` | [optional]
**getMethodName()** | **string** | Name of the method to invoke on smart contract. <br>Example: `transfer` |
**getMethodAbi()** | **object** | ABI of the method to invoke. <br>Example: `{&quot;inputs&quot;:[{&quot;internalType&quot;:&quot;uint256&quot;,&quot;name&quot;:&quot;amount&quot;,&quot;type&quot;:&quot;uint256&quot;}],&quot;name&quot;:&quot;stake&quot;,&quot;outputs&quot;:[],&quot;stateMutability&quot;:&quot;nonpayable&quot;,&quot;type&quot;:&quot;function&quot;}` |
**getParams()** | **string[]** |  <br>Example: `[&quot;0x632&quot;]` |
**getFee()** | [**\Tatum\Model\CustomFee**](../CustomFee) |  <br>Example: `null` | [optional]

