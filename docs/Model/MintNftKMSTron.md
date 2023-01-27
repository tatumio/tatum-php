---
title: MintNftKMSTron
parent: Model
layout: page
---

# MintNftKMSTron

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with <br>Example: `TRON` |
**getTo()** | **string** | The blockchain address to send the NFT to <br>Example: `TCrmdJmvDUPy8qSTgoVStF51yWm6VUh5yQ` |
**getContractAddress()** | **string** | The blockchain address of the smart contract to build the NFT on <br>Example: `TCrmdJmvDUPy8qSTgoVStF51yWm6VUh5yQ` |
**getTokenId()** | **string** | The ID of the NFT <br>Example: `123` |
**getUrl()** | **string** | The URL pointing to the NFT metadata; for more information, see <a href="https://eips.ethereum.org/EIPS/eip-721#specification" target="_blank">EIP-721</a> <br>Example: `https://my_token_data.com` |
**getFeeLimit()** | **float** | The maximum amount to be paid as the transaction fee (in TRX) <br>Example: `600` |
**getAccount()** | **string** | The blockchain address that will pay the fee for the transaction <br>Example: `TCrmdJmvDUPy8qSTgoVStF51yWm6VUh5yQ` |
**getSignatureId()** | **string** | The KMS identifier of the private key of the blockchain address that will pay the fee for the transaction <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |
**getIndex()** | **float** | (Only if the signature ID is mnemonic-based) The index of the address to pay the transaction fee that was generated from the mnemonic <br>Example: `null` | [optional]
**getAuthorAddresses()** | **string[]** | The blockchain addresses where the royalties will be sent every time the minted NFT is transferred; the royalties are paid in the native blockchain currency, TRX <br>Example: `null` | [optional]
**getCashbackValues()** | **string[]** | The amounts of the royalties that will be paid to the authors of the minted NFT every time the NFT is transferred; the amount is defined as a fixed amount of the native blockchain currency <br>Example: `null` | [optional]

