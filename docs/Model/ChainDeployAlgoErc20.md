---
title: ChainDeployAlgoErc20
parent: Model
layout: page
---

# ChainDeployAlgoErc20

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with | ex.: `ALGO`
**getSymbol()** | **string** | Symbol of the ERC20 token | ex.: `ERC_SYMBOL`
**getName()** | **string** | Name of the ERC20 token | ex.: `MyERC20`
**getTotalCap()** | **string** | Max supply of ERC20 token. | ex.: `10000000` [optional]
**getSupply()** | **string** | Initial supply of ERC20 token. If totalCap is not defined, this will be the total cap. | ex.: `10000000`
**getDigits()** | **float** | Number of decimal points | ex.: `18`
**getAddress()** | **string** | Address on Ethereum blockchain, where all created ERC20 tokens will be transferred. | ex.: `52NRXAHUDA5RKC7Q6YYJHBINGTJB7NXLUVY3CSKOBLLNLTKCN2NGPRGTN0`
**getFromPrivateKey()** | **string** | Private key of Ethereum account address, from which the fee for the deployment of ERC20 will be paid. Private key, or signature Id must be present. | ex.: `GDNQECUM2JDPTA4KXNSXHQBAYL56FDZ73NXCQ2OLB32PN2G5BLNO5GY3QD2BQOYVBPYPMMETQUGTJUQ7W3V2K4NRJFHAVVWVZVBG5G2`
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | ex.: `null` [optional]
**getFee()** | **string** | The transaction fee in ALGO | ex.: `0.001`

