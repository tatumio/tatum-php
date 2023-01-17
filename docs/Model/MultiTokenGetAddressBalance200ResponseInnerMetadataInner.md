---
title: MultiTokenGetAddressBalance200ResponseInnerMetadataInner
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getTokenId()** | **string** | The ID of the Multi Token owned by this address | [optional]
**getUrl()** | **string** | The URL pointing to the Multi Token metadata; the URL may not be present, and if it is not returned, you can get it by calling the Multi Token Contract.uri() method | [optional]
**getMetadata()** | **object** | The metadata scheme obtained from the metadata URL; the scheme may not be present, and if it is not returned, you can get it using the <a href="#operation/MultiTokenGetMetadata">Multi Token metadata API</a> | [optional]

