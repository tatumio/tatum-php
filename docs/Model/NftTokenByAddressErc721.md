# NftTokenByAddressErc721

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contract_address** | **string** | On Algorand, this is the asset ID (the ID of the NFT); on the other blockchains, this is the address of the NFT smart contract |
**balances** | **string[]** | On Algorand, an array of \&quot;1\&quot; to indicate that the NFTs with the specified IDs exist, or array with amount of fractions for &lt;a href&#x3D;\&quot;https://developer.algorand.org/docs/get-started/tokenization/nft/#fractional-nfts\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Fractional NFTs.&lt;/a&gt;; on the other blockchains, this is an array of the IDs of the NFTs. |
**block_number** | **float[]** | (EVM-based blockchains only) On EVM-based blockchains like Celo, Polygon or Ethereum, this is an array of block numbers, in which the NFT was received by the address | [optional]
**metadata** | [**\Tatum\Model\NftTokenByAddressErc721TokenMetadata[]**](NftTokenByAddressErc721TokenMetadata.md) |  |
**supply** | **float** | Only on Algorand, shows supply of &lt;a href&#x3D;\&quot;https://developer.algorand.org/docs/get-started/tokenization/nft/#fractional-nfts\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Fractional NFTs.&lt;/a&gt; | [optional]
**decimals** | **float** | Only on Algorand, shows decimals of &lt;a href&#x3D;\&quot;https://developer.algorand.org/docs/get-started/tokenization/nft/#fractional-nfts\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Fractional NFTs.&lt;/a&gt; | [optional]

[[Back to API list]](../../README.md#api-endpoints)
