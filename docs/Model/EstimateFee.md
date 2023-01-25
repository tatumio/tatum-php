---
title: EstimateFee
parent: Model
layout: page
---

# EstimateFee model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to estimate the fee for |
**getType()** | **string** | The type of the transaction |
**getSender()** | **string** | (Only if <code>type=TRANSFER_ERC20</code>) The blockchain address of the sender address | [optional]
**getRecipient()** | **string** | (Only if <code>type=TRANSFER_ERC20</code>) The blockchain address of the recipient address | [optional]
**getContractAddress()** | **string** | (Only if <code>type=TRANSFER_ERC20</code>) The blockchain address of the smart address of the fungible token | [optional]
**getAmount()** | **string** | (Only if <code>type=TRANSFER_ERC20</code>) The amount of the fungible token to be sent | [optional]

