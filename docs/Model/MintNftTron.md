---
title: MintNftTron
parent: Model
layout: page
---

# MintNftTron

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with | ex.: `TRON`
**getTo()** | **string** | The blockchain address to send the NFT to | ex.: `TCrmdJmvDUPy8qSTgoVStF51yWm6VUh5yQ`
**getContractAddress()** | **string** | The blockchain address of the smart contract to build the NFT on | ex.: `TCrmdJmvDUPy8qSTgoVStF51yWm6VUh5yQ`
**getTokenId()** | **string** | The ID of the NFT | ex.: `123`
**getUrl()** | **string** | The URL pointing to the NFT metadata; for more information, see <a href="https://eips.ethereum.org/EIPS/eip-721#specification" target="_blank">EIP-721</a> | ex.: `https://my_token_data.com`
**getFeeLimit()** | **float** | The maximum amount to be paid as the transaction fee (in TRX) | ex.: `600`
**getFromPrivateKey()** | **string** | The private key of the blockchain address that will pay the fee for the transaction | ex.: `842E09EB40D8175979EFB0071B28163E11AED0F14BDD84090A4CEFB936EF5701`
**getAuthorAddresses()** | **string[]** | The blockchain addresses where the royalties will be sent every time the minted NFT is transferred; the royalties are paid in the native blockchain currency, TRX | ex.: `null` [optional]
**getCashbackValues()** | **string[]** | The amounts of the royalties that will be paid to the authors of the minted NFT every time the NFT is transferred; the amount is defined as a fixed amount of the native blockchain currency | ex.: `null` [optional]

