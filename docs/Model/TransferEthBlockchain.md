---
title: TransferEthBlockchain
parent: Model
layout: page
---

# TransferEthBlockchain model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getTo()** | **string** | The blockchain address of the recipient |
**getAmount()** | **string** | The amount to be sent |
**getCurrency()** | [**\Tatum\Model\Erc20Currency**](../Erc20Currency) |  |
**getFromPrivateKey()** | **string** | The private key of the blockchain address of the sender; the fee will be deducted from this address |
**getFee()** | [**\Tatum\Model\CustomFee**](../CustomFee) |  | [optional]
**getData()** | **string** | Additional data that can be passed to a blockchain transaction as a data property; must be in the hexadecimal format | [optional]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]

