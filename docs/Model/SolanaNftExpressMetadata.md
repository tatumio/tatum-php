# SolanaNftExpressMetadata

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the NFT |
**symbol** | **string** | The symbol or abbreviated name of the NFT |
**seller_fee_basis_points** | **float** | The royalty that will be paid to the authors of the minted NFT every time the NFT is transferred&lt;br/&gt;The royalty is calculated as a percentage of the NFT price. To set the royalty to 1%, set this parameter to &lt;code&gt;100&lt;/code&gt;; to set 10%, set this parameter to &lt;code&gt;1000&lt;/code&gt;; to set 50%, set this parameter to &lt;code&gt;5000&lt;/code&gt;, and so on.&lt;br/&gt;To specify the NFT authors and their shares in the royalty, set the &lt;code&gt;creators&lt;/code&gt; parameter.&lt;br/&gt;To disable the royalty for the NFT completely, set &lt;code&gt;sellerFeeBasisPoints&lt;/code&gt; to &lt;code&gt;0&lt;/code&gt; and do not set &lt;code&gt;creators&lt;/code&gt;. |
**uri** | **string** | The URL pointing to the NFT metadata; for more information, see &lt;a href&#x3D;\&quot;https://eips.ethereum.org/EIPS/eip-721#specification\&quot; target&#x3D;\&quot;_blank\&quot;&gt;EIP-721&lt;/a&gt; |
**collection** | **string** | The blockchain address of the NFT collection where the NFT will be minted in. By default, the NFT is minted as not verified (is not considered a part of the collection). To verify the NFT in the collection, use the &lt;a href&#x3D;\&quot;https://apidoc.tatum.io/tag/NFT-(ERC-721-or-compatible)#operation/NftVerifyInCollection\&quot; target&#x3D;\&quot;_blank\&quot;&gt;NFT verification API&lt;/a&gt;. To know more about Solana collections and verification, refer to the &lt;a href&#x3D;\&quot;https://docs.metaplex.com/programs/token-metadata/certified-collections\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Solana user documentation&lt;/a&gt;. | [optional]
**mutable** | **bool** | Specifies whether the NFT metadata is mutable (\&quot;true\&quot;) or immutable (\&quot;false\&quot;); if not set, defaults to \&quot;true\&quot; | [optional] [default to true]
**creators** | [**\Tatum\Model\SolanaNftMetadataCreator[]**](SolanaNftMetadataCreator.md) | The blockchain addresses where the royalties will be sent every time the minted NFT is transferred | [optional]

[[Back to API list]](../../README.md#api-endpoints)
