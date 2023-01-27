---
title: ChainDeploySolanaSpl
parent: Model
layout: page
---

# ChainDeploySolanaSpl

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with <br>Example: `SOL` |
**getSupply()** | **string** | Initial supply of SPL token. <br>Example: `10000000` |
**getDigits()** | **float** | Number of decimal points <br>Example: `18` |
**getAddress()** | **string** | Address on Solana blockchain, where all created SPL tokens will be transferred. <br>Example: `FykfMwA9WNShzPJbbb9DNXsfgDgS3XZzWiFgrVXfWoPJ` |
**getFrom()** | **string** | Address on Solana blockchain, from which the fee for the deployment of SPL will be paid. <br>Example: `FykfMwA9WNShzPJbbb9DNXsfgDgS3XZzWiFgrVXfWoPJ` |
**getFromPrivateKey()** | **string** | Private key of Solana account address, from which the fee for the deployment of SPL will be paid. Private key, or signature Id must be present. <br>Example: `3abc79a31093e4cfa4a724e94a44906cbbc3a32e2f75f985a28616676a5dbaf1de8d82a7e1d0561bb0e1b729c7a9b9b1708cf2803ad0ca928a332587ace391ad` |

