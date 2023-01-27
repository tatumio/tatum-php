---
title: DeployNftTron
parent: Model
layout: page
---

# DeployNftTron

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with | ex.: `TRON`
**getName()** | **string** | Name of the NFT token | ex.: `My ERC721`
**getSymbol()** | **string** | Symbol of the NFT token | ex.: `ERC_SYMBOL`
**getFromPrivateKey()** | **string** | Private key of account address, from which gas for deployment of ERC721 will be paid. Private key, or signature Id must be present. | ex.: `842E09EB40D8175979EFB0071B28163E11AED0F14BDD84090A4CEFB936EF5701`
**getFeeLimit()** | **float** | The maximum amount to be paid as the transaction fee (in TRX); deployment of a smart contract on TRON costs around 580 TRX | ex.: `600`

