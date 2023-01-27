---
title: UpdateCashbackValueForAuthorNftTron
parent: Model
layout: page
---

# UpdateCashbackValueForAuthorNftTron

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with <br>Example: `TRON` |
**getTokenId()** | **string** | The ID of the NFT to update royalty information for <br>Example: `123` |
**getContractAddress()** | **string** | The blockchain address of the NFT to update royalty information for <br>Example: `TCrmdJmvDUPy8qSTgoVStF51yWm6VUh5yQ` |
**getCashbackValue()** | **string** | The new value of the royalty cashback to be set for the author of the NFT; to disable the royalties for the NFT completely, set this parameter to 0 <br>Example: `0.1` |
**getFeeLimit()** | **float** | The maximum amount to be paid as the transaction fee (in TRX) <br>Example: `600` |
**getFromPrivateKey()** | **string** | The private key of the NFT author's address <br>Example: `842E09EB40D8175979EFB0071B28163E11AED0F14BDD84090A4CEFB936EF5701` |

