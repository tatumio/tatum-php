---
title: CallPolygonSmartContractReadMethod
parent: Model
layout: page
---

# CallPolygonSmartContractReadMethod

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getContractAddress()** | **string** | The address of the smart contract | ex.: `0xC9c8ba8C7e2EAF43e84330Db08915A8106d7bD74`
**getMethodName()** | **string** | Name of the method to invoke on smart contract. | ex.: `transfer`
**getMethodAbi()** | **object** | ABI of the method to invoke. | ex.: `{&quot;inputs&quot;:[{&quot;internalType&quot;:&quot;uint256&quot;,&quot;name&quot;:&quot;amount&quot;,&quot;type&quot;:&quot;uint256&quot;}],&quot;name&quot;:&quot;stake&quot;,&quot;outputs&quot;:[],&quot;stateMutability&quot;:&quot;nonpayable&quot;,&quot;type&quot;:&quot;function&quot;}`
**getParams()** | **string[]** |  | ex.: `[&quot;0x632&quot;]`

