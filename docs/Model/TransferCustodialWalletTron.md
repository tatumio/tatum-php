---
title: TransferCustodialWalletTron
parent: Model
layout: page
---

# TransferCustodialWalletTron

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with <br>Example: `TRON` |
**getCustodialAddress()** | **string** | The gas pump address that transfers the asset; this is the address that you precalculated and activated earlier and that is assigned to a customer in your custodial application; this is not the "master address" <br>Example: `TYMwiDu22V6XG3yk6W9cTVBz48okKLRczh` |
**getRecipient()** | **string** | The blockchain address that receives the asset <br>Example: `TYMcTVBz48okKLRczhwiDu22V6XG3yk6W9` |
**getContractType()** | **float** | The type of the asset to transfer. Set <code>0</code> for fungible tokens (ERC-20 or equivalent), <code>1</code> for NFTs (ERC-721 or equivalent), or <code>3</code> for native blockchain currencies. <br>Example: `0` |
**getTokenAddress()** | **string** | (Only if the asset is a fungible token or NFT) The address of the token to transfer. Do not use if the asset is a native blockchain currency. <br>Example: `TYMG3ykLRczh6W9cTVBz48wiDu22V6XokK` | [optional]
**getAmount()** | **string** | (Only if the asset is a fungible token or native blockchain currency) The amount of the asset to transfer. Do not use if the asset is an NFT. <br>Example: `100000` | [optional]
**getTokenId()** | **string** | (Only if the asset is an NFT) The ID of the token to transfer. Do not use if the asset is a fungible token or native blockchain currency. <br>Example: `100000` | [optional]
**getFromPrivateKey()** | **string** | The private key of the blockchain address that owns the gas pump address ("master address") <br>Example: `05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2` |
**getFeeLimit()** | **float** | The maximum amount to be paid as the gas fee (in TRX) <br>Example: `10` |

