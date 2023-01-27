---
title: TransferNftTron
parent: Model
layout: page
---

# TransferNftTron

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getValue()** | **string** | If token to be transferred is Royalty NFT token, this is a value to be paid as a cashback to the authors of the token. <br>Example: `1` | [optional]
**getChain()** | **string** | The blockchain to work with <br>Example: `TRON` |
**getTo()** | **string** | Blockchain address to send NFT token to <br>Example: `TCrmdJmvDUPy8qSTgoVStF51yWm6VUh5yQ` |
**getTokenId()** | **string** | ID of the token. <br>Example: `123` |
**getContractAddress()** | **string** | Address of NFT token <br>Example: `TCrmdJmvDUPy8qSTgoVStF51yWm6VUh5yQ` |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. <br>Example: `842E09EB40D8175979EFB0071B28163E11AED0F14BDD84090A4CEFB936EF5701` |
**getFeeLimit()** | **float** | The maximum amount to be paid as the transaction fee (in TRX) <br>Example: `600` |

