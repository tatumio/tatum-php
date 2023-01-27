---
title: ChainDeploySolanaSplKMS
parent: Model
layout: page
---

# ChainDeploySolanaSplKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with <br>Example: `SOL` |
**getSupply()** | **string** | Initial supply of SPL token. <br>Example: `10000000` |
**getDigits()** | **float** | Number of decimal points <br>Example: `18` |
**getAddress()** | **string** | Address on Solana blockchain, where all created SPL tokens will be transferred. <br>Example: `FykfMwA9WNShzPJbbb9DNXsfgDgS3XZzWiFgrVXfWoPJ` |
**getFrom()** | **string** | Address on Solana blockchain, from which the fee for the deployment of SPL will be paid. <br>Example: `FykfMwA9WNShzPJbbb9DNXsfgDgS3XZzWiFgrVXfWoPJ` |
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |

