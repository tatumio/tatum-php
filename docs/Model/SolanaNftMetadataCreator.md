---
title: SolanaNftMetadataCreator
parent: Model
layout: page
---

# SolanaNftMetadataCreator

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAddress()** | **string** | The blockchain address of the NFT creator <br>Example: `FykfMwA9WNShzPJbbb9DNXsfgDgS3XZzWiFgrVXfWoPJ` |
**getVerified()** | **bool** | If set to "true", the NFT creator was verified. Only the address whose private key was used during the minting of the NFT can be a verified creator. If you are minting the NFT using NFT Express, set this parameter to "false". <br>Example: `true` |
**getShare()** | **float** | The share to be sent to the NFT creator (in %) <br>Example: `100` |

