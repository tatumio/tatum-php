---
title: FlowAccount
parent: Model
layout: page
---

# FlowAccount

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAddress()** | **string** | Account address. | ex.: `0x02fcc83938d2b63b` [optional]
**getBalance()** | **float** | Balance of the account in smallest FLOW unit = 1 FLOW = 1e8 unit | ex.: `10000000` [optional]
**getCode()** | **string** | Account code | ex.: `null` [optional]
**getContracts()** | **object** |  | ex.: `null` [optional]
**getKeys()** | [**\Tatum\Model\FlowAccountKeysInner[]**](../FlowAccountKeysInner) | Array of public keys assigned. | ex.: `null` [optional]

