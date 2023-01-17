---
title: TransferEgldBlockchain
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFrom()** | **string** | Account address of the sender |
**getTo()** | **string** | Account address of the receiver or smart contract |
**getAmount()** | **string** | Value to be sent. |
**getFee()** | [**\Tatum\Model\TransferEgldBlockchainFee**](TransferEgldBlockchainFee.md) |  | [optional]
**getData()** | **string** | Additional data that can be passed to a blockchain transaction as a data property; must be in the hexadecimal format | [optional]
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. |

[[Back to Index]](../index.md)
