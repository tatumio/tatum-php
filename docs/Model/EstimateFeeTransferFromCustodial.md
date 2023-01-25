---
title: EstimateFeeTransferFromCustodial
parent: Model
layout: page
---

# EstimateFeeTransferFromCustodial model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to estimate the fee for |
**getType()** | **string** | The type of the transaction |
**getSender()** | **string** | The blockchain address of the sender |
**getRecipient()** | **string** | The blockchain address of the recipient |
**getCustodialAddress()** | **string** | The blockchain address of the custodial wallet contract |
**getTokenType()** | **float** | The type of the asset to transfer. Set <code>0</code> for fungible tokens (ERC-20 or equivalent), <code>1</code> for NFTs (ERC-721 or equivalent), <code>2</code> for Multi Tokens (ERC-1155 or equivalent), or <code>3</code> for native blockchain currencies. |
**getAmount()** | **string** | If the asset to transfer is a fungible token, Multi Token, or a native blockchain currency, set this parameter to the amount to transfer If the asset to transfer is an NFT, set this parameter to <code>1</code>. |
**getContractAddress()** | **string** | (Only if the asset to transfer is a fungible token) The address of the smart contract of the token | [optional]

