---
title: GenerateCustodialWalletBatchCelo
parent: Model
layout: page
---

# GenerateCustodialWalletBatchCelo

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. <br>Example: `CELO` |
**getFeeCurrency()** | **string** | The currency in which the gas fee will be paid <br>Example: `null` | [optional] [default to 'CELO']
**getFromPrivateKey()** | **string** | Private key of account, from which the transaction will be initiated. <br>Example: `0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2` |
**getBatchCount()** | **float** | Number of addresses to generate. <br>Example: `null` |
**getOwner()** | **string** | Owner of the addresses. <br>Example: `0x8cb76aed9c5e336ef961265c6079c14e9cd3d2ea` |
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](../DeployErc20Fee) |  <br>Example: `null` | [optional]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used <br>Example: `null` | [optional]

