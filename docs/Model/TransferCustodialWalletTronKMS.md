---
title: TransferCustodialWalletTronKMS
parent: Model
layout: page
---

# TransferCustodialWalletTronKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with | ex.: `TRON`
**getCustodialAddress()** | **string** | The gas pump address that transfers the asset; this is the address that you precalculated and activated earlier and that is assigned to a customer in your custodial application; this is not the "master address" | ex.: `TYMwiDu22V6XG3yk6W9cTVBz48okKLRczh`
**getFrom()** | **string** | The blockchain address that owns the gas pump address ("master address") in the Base58 format | ex.: `TBAYy8ykFZqdzxMwaqacHvUvUzUTp6ZR5U`
**getRecipient()** | **string** | The blockchain address that receives the asset | ex.: `TYMcTVBz48okKLRczhwiDu22V6XG3yk6W9`
**getContractType()** | **float** | The type of the asset to transfer. Set <code>0</code> for fungible tokens (ERC-20 or equivalent), <code>1</code> for NFTs (ERC-721 or equivalent), or <code>3</code> for native blockchain currencies. | ex.: `0`
**getTokenAddress()** | **string** | (Only if the asset is a fungible token or NFT) The address of the token to transfer. Do not use if the asset is a native blockchain currency. | ex.: `TYMG3ykLRczh6W9cTVBz48wiDu22V6XokK` [optional]
**getAmount()** | **string** | (Only if the asset is a fungible token or native blockchain currency) The amount of the asset to transfer. Do not use if the asset is an NFT. | ex.: `100000` [optional]
**getTokenId()** | **string** | (Only if the asset is an NFT) The ID of the token to transfer. Do not use if the asset is a fungible token or native blockchain currency. | ex.: `100000` [optional]
**getSignatureId()** | **string** | The KMS identifier of the private key of the blockchain address that owns the gas pump address key ("master address") | ex.: `26d3883e-4e17-48b3-a0ee-09a3e484ac83`
**getIndex()** | **float** | (Only if the signature ID is mnemonic-based) The index of the "master address" | ex.: `null` [optional]
**getFeeLimit()** | **float** | The maximum amount to be paid as the gas fee (in TRX) | ex.: `10`

