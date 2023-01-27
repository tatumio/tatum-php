---
title: FlowAccount
parent: Model
layout: page
---

# FlowAccount

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAddress()** | **string** | Account address. <br>Example: `0x02fcc83938d2b63b` | [optional]
**getBalance()** | **float** | Balance of the account in smallest FLOW unit = 1 FLOW = 1e8 unit <br>Example: `10000000` | [optional]
**getCode()** | **string** | Account code <br>Example: `null` | [optional]
**getContracts()** | **object** |  <br>Example: `null` | [optional]
**getKeys()** | [**\Tatum\Model\FlowAccountKeysInner[]**](../FlowAccountKeysInner) | Array of public keys assigned. <br>Example: `null` | [optional]

