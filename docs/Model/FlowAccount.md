---
title: FlowAccount
parent: Model
layout: page
---

# FlowAccount model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAddress()** | **string** | Account address. | [optional]
**getBalance()** | **float** | Balance of the account in smallest FLOW unit = 1 FLOW = 1e8 unit | [optional]
**getCode()** | **string** | Account code | [optional]
**getContracts()** | **object** |  | [optional]
**getKeys()** | [**\Tatum\Model\FlowAccountKeysInner[]**](../FlowAccountKeysInner) | Array of public keys assigned. | [optional]

