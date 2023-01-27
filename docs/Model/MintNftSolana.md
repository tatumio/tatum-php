---
title: MintNftSolana
parent: Model
layout: page
---

# MintNftSolana

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with <br>Example: `SOL` |
**getTo()** | **string** | The blockchain address to send the NFT to <br>Example: `9pSkqSG71Sb25ia9WBFhoeBYjp8dhUf7fRux9xrDq89b` |
**getFrom()** | **string** | The blockchain address that will pay the fee for the transaction <br>Example: `FykfMwA9WNShzPJbbb9DNXsfgDgS3XZzWiFgrVXfWoPJ` |
**getFromPrivateKey()** | **string** | The private key of the blockchain address that will pay the fee for the transaction <br>Example: `3abc79a31093e4cfa4a724e94a44906cbbc3a32e2f75f985a28616676a5dbaf1de8d82a7e1d0561bb0e1b729c7a9b9b1708cf2803ad0ca928a332587ace391ad` |
**getCollectionVerifierPrivateKey()** | **string** | The private key of the collection verifier (owner) who will verify the NFT in the NFT collection where the NFT is minted in. The blockchain address of this collection is specified in the <code>collection</code> parameter in the <code>metadata</code> section of the request body. To know more about Solana collections and verification, refer to the <a href="https://docs.metaplex.com/programs/token-metadata/certified-collections" target="_blank">Solana user documentation</a>. <br>Example: `3abc79a31093e4cfa4a724e94a44906cbbc3a32e2f75f985a28616676a5dbaf1de8d82a7e1d0561bb0e1b729c7a9b9b1708cf2803ad0ca928a332587ace391ad` | [optional]
**getMetadata()** | [**\Tatum\Model\SolanaNftMetadata**](../SolanaNftMetadata) |  <br>Example: `null` |

