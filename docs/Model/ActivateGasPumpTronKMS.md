---
title: ActivateGasPumpTronKMS
parent: Model
layout: page
---

# ActivateGasPumpTronKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with <br>Example: `TRON` |
**getOwner()** | **string** | The blockchain address that owns the precalculated gas pump addresses and is used to pay gas fees for operations made on the gas pump addresses; can be referred to as "master address" <br>Example: `0x2b5a0bE5940B63dE1eDdCCCa7bd977357e2488eD` |
**getFrom()** | **int** | The start index of the range of gas pump addresses to activate <br>Example: `0` |
**getTo()** | **int** | The end index of the range of gas pump addresses to activate; must be greater than or equal to the value in the <code>from</code> parameter <br>Example: `200` |
**getFeeLimit()** | **float** | The maximum amount to be paid as the gas fee (in TRX) <br>Example: `600` |
**getSignatureId()** | **string** | The KMS identifier of the private key of the blockchain address that will pay the gas fee for the activation transaction <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |
**getIndex()** | **float** | (Only if the signature ID is mnemonic-based) The index of the specific address from the mnemonic <br>Example: `null` | [optional]

