---
title: TransferVetBlockchain
parent: Model
layout: page
---

# TransferVetBlockchain model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getTo()** | **string** | Blockchain address to send assets |
**getAmount()** | **string** | Amount to be sent in VET |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**getData()** | **string** | Additional data that can be passed to a blockchain transaction as a data property; must be in the hexadecimal format | [optional]
**getFee()** | [**\Tatum\Model\TransferVetBlockchainFee**](../TransferVetBlockchainFee) |  | [optional]

