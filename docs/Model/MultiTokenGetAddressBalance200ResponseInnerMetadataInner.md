---
title: MultiTokenGetAddressBalance200ResponseInnerMetadataInner
parent: Model
layout: page
---

# MultiTokenGetAddressBalance200ResponseInnerMetadataInner

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getTokenId()** | **string** | The ID of the Multi Token owned by this address <br>Example: `1` | [optional]
**getUrl()** | **string** | The URL pointing to the Multi Token metadata; the URL may not be present, and if it is not returned, you can get it by calling the Multi Token Contract.uri() method <br>Example: `ipfs://QmXFpaS3S7CkLZvihLFA9JbawKdqhjg8dJeDkPntmkD2Pc` | [optional]
**getMetadata()** | **object** | The metadata scheme obtained from the metadata URL; the scheme may not be present, and if it is not returned, you can get it using the Multi Token metadata API <br>Example: `{&quot;name&quot;:&quot;Example NFT name&quot;,&quot;description&quot;:&quot;Example NFT description&quot;,&quot;image&quot;:&quot;ipfs://QmP4R7ACZ7JRQ6sLdmnPHqjWEXxzdnPvhAV2f6RnQ8uxJ6&quot;}` | [optional]

