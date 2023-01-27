---
title: ChainTransferKcsEthErc20KMS
parent: Model
layout: page
---

# ChainTransferKcsEthErc20KMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with | ex.: `KCS`
**getTo()** | **string** | The blockchain address to send the fungible tokens to | ex.: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85`
**getContractAddress()** | **string** | The blockchain address of the fungible token smart contract | ex.: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85`
**getAmount()** | **string** | The amount of the fungible tokens to be sent | ex.: `100000`
**getDigits()** | **float** | The number of decimal places that the fungible tokens have | ex.: `18`
**getSignatureId()** | **string** | The KMS identifier of the private key of the blockchain address from which the fee will be deducted | ex.: `26d3883e-4e17-48b3-a0ee-09a3e484ac83`
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | ex.: `null` [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](../CustomFee) |  | ex.: `null` [optional]

