---
title: UpdateFeeRecipientCeloKMS
parent: Model
layout: page
---

# UpdateFeeRecipientCeloKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. | ex.: `CELO`
**getContractAddress()** | **string** | Address of the marketplace smart contract. | ex.: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85`
**getFeeCurrency()** | **string** | The currency in which the transaction fee will be paid | ex.: `null`
**getFeeRecipient()** | **string** | Recipient address of the marketplace fee. | ex.: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85`
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. | ex.: `26d3883e-4e17-48b3-a0ee-09a3e484ac83`
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | ex.: `null` [optional]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | ex.: `1` [optional]
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](../DeployErc20Fee) |  | ex.: `null` [optional]

