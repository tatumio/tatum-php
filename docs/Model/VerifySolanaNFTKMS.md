---
title: VerifySolanaNFTKMS
parent: Model
layout: page
---

# VerifySolanaNFTKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with <br>Example: `SOL` |
**getNftAddress()** | **string** | The blockchain address of the NFT to verify <br>Example: `CHw1Fy5YdbaaosLXrrxhuc3X3fpssMqDQm9XwJh9LPGe` |
**getCollectionAddress()** | **string** | The blockchain address of the NFT collection where the NFT should be verified in. The collection must be a sized collection that was introduced in <a href="https://docs.metaplex.com/programs/token-metadata/changelog/v1.3" target="_blank">Version 1.3</a> of the Metaplex Token Metadata program. <br>Example: `CHw1Fy5YdbaaosLXrrxhuc3X3fpssMqDQm9XwJh9LPGe` |
**getFrom()** | **string** | The blockchain address of the collection verifier on behalf of whom the transaction will be originated. The transaction fee will be paid from this address. <br>Example: `FykfMwA9WNShzPJbbb9DNXsfgDgS3XZzWiFgrVXfWoPJ` |
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |

