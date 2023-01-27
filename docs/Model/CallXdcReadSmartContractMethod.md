---
title: CallXdcReadSmartContractMethod
parent: Model
layout: page
---

# CallXdcReadSmartContractMethod

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getContractAddress()** | **string** | The address of the smart contract | ex.: `xdc687422eEA2cB73B5d3e242bA5456b782919AFc85`
**getMethodName()** | **string** | Name of the method to invoke on smart contract. | ex.: `transfer`
**getMethodAbi()** | **object** | ABI of the method to invoke. | ex.: `{&quot;inputs&quot;:[{&quot;internalType&quot;:&quot;uint256&quot;,&quot;name&quot;:&quot;amount&quot;,&quot;type&quot;:&quot;uint256&quot;}],&quot;name&quot;:&quot;stake&quot;,&quot;outputs&quot;:[],&quot;stateMutability&quot;:&quot;nonpayable&quot;,&quot;type&quot;:&quot;function&quot;}`
**getParams()** | **string[]** | Parameters of the method to be invoked. | ex.: `[&quot;0x632&quot;]`

