# MintNftSolana

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | The blockchain to work with |
**to** | **string** | The blockchain address to send the NFT to |
**from** | **string** | The blockchain address that will pay the fee for the transaction |
**from_private_key** | **string** | The private key of the blockchain address that will pay the fee for the transaction |
**collection_verifier_private_key** | **string** | The private key of the collection verifier (owner) who will verify the NFT in the NFT collection where the NFT is minted in. The blockchain address of this collection is specified in the <code>collection</code> parameter in the <code>metadata</code> section of the request body. To know more about Solana collections and verification, refer to the <a href="https://docs.metaplex.com/programs/token-metadata/certified-collections" target="_blank">Solana user documentation</a>. | [optional]
**metadata** | [**\Tatum\Model\SolanaNftMetadata**](SolanaNftMetadata.md) |  |

[[Back to Index]](../index.md)
