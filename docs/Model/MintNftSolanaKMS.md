---
title: MintNftSolanaKMS
parent: Model
layout: page
---

# MintNftSolanaKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with <br>Example: `SOL` |
**getTo()** | **string** | The blockchain address to send the NFT to <br>Example: `9pSkqSG71Sb25ia9WBFhoeBYjp8dhUf7fRux9xrDq89b` |
**getFrom()** | **string** | The blockchain address that will pay the fee for the transaction <br>Example: `FykfMwA9WNShzPJbbb9DNXsfgDgS3XZzWiFgrVXfWoPJ` |
**getSignatureId()** | **string** | The KMS identifier of the private key of the blockchain address that will pay the fee for the transaction <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |
**getMetadata()** | [**\Tatum\Model\SolanaNftMetadataKMS**](../SolanaNftMetadataKMS) |  <br>Example: `null` |

