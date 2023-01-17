---
title: MintNftSolana
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with |
**getTo()** | **string** | The blockchain address to send the NFT to |
**getFrom()** | **string** | The blockchain address that will pay the fee for the transaction |
**getFromPrivateKey()** | **string** | The private key of the blockchain address that will pay the fee for the transaction |
**getCollectionVerifierPrivateKey()** | **string** | The private key of the collection verifier (owner) who will verify the NFT in the NFT collection where the NFT is minted in. The blockchain address of this collection is specified in the <code>collection</code> parameter in the <code>metadata</code> section of the request body. To know more about Solana collections and verification, refer to the <a href="https://docs.metaplex.com/programs/token-metadata/certified-collections" target="_blank">Solana user documentation</a>. | [optional]
**getMetadata()** | [**\Tatum\Model\SolanaNftMetadata**](SolanaNftMetadata.md) |  |

[[Back to Index]](../index.md)
