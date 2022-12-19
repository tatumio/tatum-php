# SolanaNftMetadata

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the NFT |
**symbol** | **string** | The symbol or abbreviated name of the NFT |
**seller_fee_basis_points** | **float** | The basis points of the seller fee |
**uri** | **string** | The URL pointing to the NFT metadata; for more information, see &lt;a href&#x3D;\&quot;https://eips.ethereum.org/EIPS/eip-721#specification\&quot; target&#x3D;\&quot;_blank\&quot;&gt;EIP-721&lt;/a&gt; |
**collection** | **string** | The blockchain address of the NFT collection where the NFT will be minted in. Specify the private key of the collection verifier in the &lt;code&gt;collectionVerifierPrivateKey&lt;/code&gt; parameter of the request body to get the NFT verified in the collection after the NFT has been minted. To know more about Solana collections and verification, refer to the &lt;a href&#x3D;\&quot;https://docs.metaplex.com/programs/token-metadata/certified-collections\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Solana user documentation&lt;/a&gt;. | [optional]
**mutable** | **bool** | Specifies whether the NFT metadata is mutable (\&quot;true\&quot;) or immutable (\&quot;false\&quot;); if not set, defaults to \&quot;true\&quot; | [optional] [default to true]
**creators** | [**\Tatum\Model\SolanaNftMetadataCreator[]**](SolanaNftMetadataCreator.md) | The blockchain addresses where the royalties will be sent every time the minted NFT is transferred | [optional]

[[Back to API list]](../../README.md#api-endpoints)
