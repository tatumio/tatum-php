---
title: ApproveCeloErc20KMS
parent: Model
layout: page
---

# ApproveCeloErc20KMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with | ex.: `CELO`
**getContractAddress()** | **string** | The address of the smart contract | ex.: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85`
**getSpender()** | **string** | The blockchain address to be allowed to transfer or burn the fungible tokens | ex.: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85`
**getAmount()** | **string** | The amount of the tokens allowed to be transferred or burnt | ex.: `100000`
**getSignatureId()** | **string** | The KMS identifier of the private key of the smart contract's owner; the fee will be deducted from the owner's address | ex.: `26d3883e-4e17-48b3-a0ee-09a3e484ac83`
**getFeeCurrency()** | **string** | The currency in which the transaction fee will be paid | ex.: `null`
**getFee()** | [**\Tatum\Model\CustomFee**](../CustomFee) |  | ex.: `null` [optional]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | ex.: `null` [optional]

