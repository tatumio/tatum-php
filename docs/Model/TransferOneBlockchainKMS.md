---
title: TransferOneBlockchainKMS
parent: Model
layout: page
---

# TransferOneBlockchainKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAmount()** | **string** | The amount to transfer | ex.: `100000`
**getCurrency()** | **string** | The currency of the amount to transfer | ex.: `ONE`
**getTo()** | **string** | The blockchain address to transfer the amount to | ex.: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85`
**getSignatureId()** | **string** | The KMS identifier of the private key of the blockchain address from which the fee will be deducted | ex.: `26d3883e-4e17-48b3-a0ee-09a3e484ac83`
**getIndex()** | **float** | (Only if the signature ID is mnemonic-based) The index of the address from which the fee will be deducted that was generated from the mnemonic | ex.: `null` [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](../CustomFee) |  | ex.: `null` [optional]
**getData()** | **string** | Additional data that can be passed to a blockchain transaction as a data property; must be in the hexadecimal format | ex.: `4d79206e6f746520746f2074686520726563697069656e74` [optional]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | ex.: `null` [optional]

