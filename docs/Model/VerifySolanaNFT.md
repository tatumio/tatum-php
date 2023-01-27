---
title: VerifySolanaNFT
parent: Model
layout: page
---

# VerifySolanaNFT

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with <br>Example: `SOL` |
**getNftAddress()** | **string** | The blockchain address of the NFT to verify <br>Example: `CHw1Fy5YdbaaosLXrrxhuc3X3fpssMqDQm9XwJh9LPGe` |
**getCollectionAddress()** | **string** | The blockchain address of the NFT collection where the NFT should be verified in. The collection must be a sized collection that was introduced in <a href="https://docs.metaplex.com/programs/token-metadata/changelog/v1.3" target="_blank">Version 1.3</a> of the Metaplex Token Metadata program. <br>Example: `CHw1Fy5YdbaaosLXrrxhuc3X3fpssMqDQm9XwJh9LPGe` |
**getFrom()** | **string** | The blockchain address of the collection verifier on behalf of whom the transaction will be originated. The transaction fee will be paid from this address. <br>Example: `FykfMwA9WNShzPJbbb9DNXsfgDgS3XZzWiFgrVXfWoPJ` |
**getFromPrivateKey()** | **string** | The private key of the collection verifier's address <br>Example: `3abc79a31093e4cfa4a724e94a44906cbbc3a32e2f75f985a28616676a5dbaf1de8d82a7e1d0561bb0e1b729c7a9b9b1708cf2803ad0ca928a332587ace391ad` |

