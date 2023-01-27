---
title: TransferErc20CeloKMS
parent: Model
layout: page
---

# TransferErc20CeloKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getTo()** | **string** | Blockchain address to send ERC20 token to | ex.: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85`
**getAmount()** | **string** | Amount to be sent. | ex.: `100000`
**getContractAddress()** | **string** | Address of ERC20 token | ex.: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85`
**getDigits()** | **float** | Number of decimal points that ERC20 token has. | ex.: `18`
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | ex.: `null` [optional]
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. | ex.: `26d3883e-4e17-48b3-a0ee-09a3e484ac83`
**getNonce()** | **float** | Nonce to be set to Celo transaction. If not present, last known nonce will be used. | ex.: `null` [optional]
**getFeeCurrency()** | **string** | Currency to pay for transaction gas | ex.: `null`

