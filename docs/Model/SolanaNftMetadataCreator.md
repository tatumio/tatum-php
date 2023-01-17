---
title: SolanaNftMetadataCreator
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAddress()** | **string** | The blockchain address of the NFT creator |
**getVerified()** | **bool** | If set to "true", the NFT creator was verified. Only the address whose private key was used during the minting of the NFT can be a verified creator. If you are minting the NFT using NFT Express, set this parameter to "false". |
**getShare()** | **float** | The share to be sent to the NFT creator (in %) |

