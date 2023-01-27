---
title: EstimateFee
parent: Model
layout: page
---

# EstimateFee

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to estimate the fee for <br>Example: `null` |
**getType()** | **string** | The type of the transaction <br>Example: `null` |
**getSender()** | **string** | (Only if <code>type=TRANSFER_ERC20</code>) The blockchain address of the sender address <br>Example: `0xfb99f8ae9b70a0c8cd96ae665bbaf85a7e01a2ef` | [optional]
**getRecipient()** | **string** | (Only if <code>type=TRANSFER_ERC20</code>) The blockchain address of the recipient address <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` | [optional]
**getContractAddress()** | **string** | (Only if <code>type=TRANSFER_ERC20</code>) The blockchain address of the smart address of the fungible token <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` | [optional]
**getAmount()** | **string** | (Only if <code>type=TRANSFER_ERC20</code>) The amount of the fungible token to be sent <br>Example: `100000` | [optional]

