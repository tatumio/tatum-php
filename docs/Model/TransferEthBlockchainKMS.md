---
title: TransferEthBlockchainKMS
parent: Model
layout: page
---

# TransferEthBlockchainKMS model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getTo()** | **string** | The blockchain address of the recipient |
**getAmount()** | **string** | The amount to be sent |
**getCurrency()** | [**\Tatum\Model\Erc20Currency**](../Erc20Currency) |  |
**getSignatureId()** | **string** | The KMS identifier of the private key of the sender's blockchain address; the fee will be deducted from this address |
**getIndex()** | **float** | (Only if the signature ID is mnemonic-based) The index of the address from which the fee will be deducted that was generated from the mnemonic | [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](../CustomFee) |  | [optional]
**getData()** | **string** | Additional data that can be passed to a blockchain transaction as a data property; must be in the hexadecimal format | [optional]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]

