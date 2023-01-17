---
title: EstimateFee
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to estimate fee for. |
**getType()** | **string** | Type of transaction |
**getSender()** | **string** | Sender address, if type is TRANSFER_ERC20 | [optional]
**getRecipient()** | **string** | Blockchain address to send assets, if type is TRANSFER_ERC20 | [optional]
**getContractAddress()** | **string** | Contract address of ERC20 token, if type is TRANSFER_ERC20 | [optional]
**getAmount()** | **string** | Amount to be sent in ERC20, if type is TRANSFER_ERC20 | [optional]

