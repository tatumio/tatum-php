---
title: BurnNftKMS
parent: Model
layout: page
---

# BurnNftKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with <br>Example: `ETH` |
**getTokenId()** | **string** | The ID of the NFT to burn <br>Example: `123` |
**getContractAddress()** | **string** | The blockchain address of the NFT to burn <br>Example: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getIndex()** | **float** | (Only if the signature ID is mnemonic-based) The index of the address to pay the transaction fee that was generated from the mnemonic <br>Example: `null` | [optional]
**getSignatureId()** | **string** | The KMS identifier of the private key of the blockchain address from which the fee will be deducted <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used <br>Example: `null` | [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](../CustomFee) |  <br>Example: `null` | [optional]

