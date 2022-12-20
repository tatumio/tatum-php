# NftTokenByAddressErc721TokenMetadata

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**token_id** | **string** | (EVM-based blockchains only) The ID of the NFT owned by this address | [optional]
**url** | **string** | The URL pointing to the NFT metadata; the URL may not be present, and if it is not returned, you can get it by calling the NFT Contract.tokenURI() method | [optional]
**metadata** | **object** | The metadata scheme obtained from the metadata URL; the scheme may not be present, and if it is not returned, you can get it using the <a href="#operation/NftGetMetadataErc721">NFT metadata API</a> | [optional]

[[Back to Index]](../index.md)
