---
title: GenerateCustodialWalletBatchCeloKMS
parent: Model
layout: page
---

# GenerateCustodialWalletBatchCeloKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. <br>Example: `CELO` |
**getFeeCurrency()** | **string** | The currency in which the gas fee will be paid <br>Example: `null` | [optional] [default to 'CELO']
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. <br>Example: `null` | [optional]
**getBatchCount()** | **float** | Number of addresses to generate. <br>Example: `null` |
**getOwner()** | **string** | Owner of the addresses. <br>Example: `0x8cb76aed9c5e336ef961265c6079c14e9cd3d2ea` |
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](../DeployErc20Fee) |  <br>Example: `null` | [optional]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used <br>Example: `null` | [optional]

