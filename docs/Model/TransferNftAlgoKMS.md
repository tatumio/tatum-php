# TransferNftAlgoKMS

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | The blockchain to work with |
**from** | **string** | Blockchain address to send NFT token from |
**to** | **string** | Blockchain address to send NFT token to |
**contract_address** | **string** | AssetID of token. |
**signature_id** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**amount** | **float** | The total amount of NFT fractions to transfer. Defaults to 1 - which means 1 fraction of NFT will be transferred. This is only valid for &lt;a href&#x3D;\&quot;https://developer.algorand.org/docs/get-started/tokenization/nft/#fractional-nfts\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Fractional NFTs.&lt;/a&gt; | [optional] [default to 1]

[[Back to API list]](../../README.md#api-endpoints)
