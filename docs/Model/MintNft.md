---
title: MintNft
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with |
**getTo()** | **string** | The blockchain address to send the NFT to |
**getContractAddress()** | **string** | The blockchain address of the smart contract to build the NFT on |
**getTokenId()** | **string** | The ID of the NFT |
**getUrl()** | **string** | The URL pointing to the NFT metadata; for more information, see <a href="https://eips.ethereum.org/EIPS/eip-721#specification" target="_blank">EIP-721</a> |
**getFromPrivateKey()** | **string** | The private key of the blockchain address that will pay the fee for the transaction |
**getErc20()** | **string** | The blockchain address of the custom fungible token | [optional]
**getProvenance()** | **bool** | Set to "true" if the NFT smart contract is of the <a href="#operation/NftDeployErc721">provenance type</a>; otherwise, set to "false". | [optional]
**getAuthorAddresses()** | **string[]** | The blockchain addresses where the royalties will be sent every time the minted NFT is transferred; the royalties are paid in a native blockchain currency such as ETH on Ethereum, MATIC on Polygon, and so on | [optional]
**getCashbackValues()** | **string[]** | The amounts of the royalties that will be paid to the authors of the minted NFT every time the NFT is transferred; the amount is defined as a fixed amount of the native blockchain currency for <a href="#operation/NftDeployErc721">cashback smart contracts</a> or as a percentage of the NFT price for <a href="#operation/NftDeployErc721">provenance smart contracts</a> | [optional]
**getFixedValues()** | **string[]** | The fixed amounts of the native blockchain currency to which the cashback royalty amounts will be compared to; if the fixed amount specified in this parameter is greater than the amount of the cashback royalties, this fixed amount will be sent to the NFT authors instead of the cashback royalties | [optional]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](CustomFee.md) |  | [optional]

[[Back to Index]](../index.md)
