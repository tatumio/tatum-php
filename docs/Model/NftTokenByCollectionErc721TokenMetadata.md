---
title: NftTokenByCollectionErc721TokenMetadata
parent: Model
layout: page
---

# NftTokenByCollectionErc721TokenMetadata

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getTokenId()** | **string** | TokenID of the NFT token owned by this address. <br>Example: `123` | [optional]
**getUrl()** | **string** | Metadata URL of the TokenID. This data don't have to be present, safest way (if not present) is to obtain them from the NFT Contract.tokenURI() method call. <br>Example: `ipfs://QmXFpaS3S7CkLZvihLFA9JbawKdqhjg8dJeDkPntmkD2Pc` | [optional]
**getMetadata()** | **object** | Metadata scheme obtained from the url. This data don't have to be present, safest way (if not present) is to obtain them from the NFT Contract.tokenURI() method call. <br>Example: `{&quot;name&quot;:&quot;Example NFT name&quot;,&quot;description&quot;:&quot;Example NFT description&quot;,&quot;image&quot;:&quot;ipfs://QmP4R7ACZ7JRQ6sLdmnPHqjWEXxzdnPvhAV2f6RnQ8uxJ6&quot;}` | [optional]

