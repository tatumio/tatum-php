---
title: SolanaNftMetadata
parent: Model
layout: page
---

# SolanaNftMetadata

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getName()** | **string** | The name of the NFT <br>Example: `My NFT` |
**getSymbol()** | **string** | The symbol or abbreviated name of the NFT <br>Example: `NFT_SYMBOL` |
**getSellerFeeBasisPoints()** | **float** | The royalty that will be paid to the authors of the minted NFT every time the NFT is transferred<br/>The royalty is calculated as a percentage of the NFT price. To set the royalty to 1%, set this parameter to <code>100</code>; to set 10%, set this parameter to <code>1000</code>; to set 50%, set this parameter to <code>5000</code>, and so on.<br/>To specify the NFT authors and their shares in the royalty, set the <code>creators</code> parameter.<br/>To disable the royalty for the NFT completely, set <code>sellerFeeBasisPoints</code> to <code>0</code> and do not set <code>creators</code>. <br>Example: `0` |
**getUri()** | **string** | The URL pointing to the NFT metadata; for more information, see <a href="https://eips.ethereum.org/EIPS/eip-721#specification" target="_blank">EIP-721</a> <br>Example: `https://my_token_data.com` |
**getCollection()** | **string** | The blockchain address of the NFT collection where the NFT will be minted in. Specify the private key of the collection verifier in the <code>collectionVerifierPrivateKey</code> parameter of the request body to get the NFT verified in the collection after the NFT has been minted. To know more about Solana collections and verification, refer to the <a href="https://docs.metaplex.com/programs/token-metadata/certified-collections" target="_blank">Solana user documentation</a>. <br>Example: `FykfMwA9WNShzPJbbb9DNXsfgDgS3XZzWiFgrVXfWoPJ` | [optional]
**getMutable()** | **bool** | Specifies whether the NFT metadata is mutable ("true") or immutable ("false"); if not set, defaults to "true" <br>Example: `null` | [optional] [default to true]
**getCreators()** | [**\Tatum\Model\SolanaNftMetadataCreator[]**](../SolanaNftMetadataCreator) | The blockchain addresses where the royalties will be sent every time the minted NFT is transferred <br>Example: `null` | [optional]

