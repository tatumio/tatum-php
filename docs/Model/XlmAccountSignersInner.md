---
title: XlmAccountSignersInner
parent: Model
layout: page
---

# XlmAccountSignersInner

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getWeight()** | **float** | The numerical weight of a signer. Used to determine if a transaction meets the threshold requirements. <br>Example: `1` | [optional]
**getKey()** | **string** | A hash of characters dependent on the signer type. <br>Example: `GBRPYHIL2CI3FNQ4BXLFMNDLFJUNPU2HY3ZMFSHONUCEOASW7QC7OX2H` | [optional]
**getType()** | **string** | The type of hash for this signer. <br>Example: `ed25519_public_key` | [optional]

