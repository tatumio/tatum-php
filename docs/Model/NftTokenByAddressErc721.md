---
title: NftTokenByAddressErc721
parent: Model
layout: page
---

# NftTokenByAddressErc721 model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getContractAddress()** | **string** | On Algorand, this is the asset ID (the ID of the NFT); on the other blockchains, this is the address of the NFT smart contract. |
**getBalances()** | **string[]** | On Algorand, this is either an array of "1" to indicate that the NFTs with the specified IDs exist, or an array with the number of NFT fractions if the NFTs are <a href="https://developer.algorand.org/docs/get-started/tokenization/nft/#fractional-nfts" target="_blank">fractional</a>; on the other blockchains, this is an array of the IDs of the NFTs. |
**getBlockNumber()** | **float[]** | (EVM-based blockchains only) An array of the numbers of the blocks in which the NFT was received by the address | [optional]
**getMetadata()** | [**\Tatum\Model\NftTokenByAddressErc721TokenMetadata[]**](../NftTokenByAddressErc721TokenMetadata) |  |
**getSupply()** | **float** | (Algorand only) The number of fractions in the NFT if the NFT is <a href="https://developer.algorand.org/docs/get-started/tokenization/nft/#fractional-nfts" target="_blank">fractional</a> | [optional]
**getDecimals()** | **float** | (Algorand only) The number of decimal places in an NFT fraction if the NFT is <a href="https://developer.algorand.org/docs/get-started/tokenization/nft/#fractional-nfts" target="_blank">fractional</a> | [optional]

