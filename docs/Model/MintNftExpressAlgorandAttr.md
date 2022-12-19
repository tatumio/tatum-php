# MintNftExpressAlgorandAttr

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**asset_unit** | **string** | The unit name of the NFT | [optional]
**total** | **float** | The total amount of the NFTs to mint. Defaults to 1 - which means 1 NFT will be minted.&lt;br/&gt;Value above 1 means, you are going to mint &lt;a href&#x3D;\&quot;https://developer.algorand.org/docs/get-started/tokenization/nft/#fractional-nfts\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Fractional NFTs.&lt;/a&gt;In this case value must be a power of 10 larger than 1 e.g. 10, 100, 1000... | [optional] [default to 1]
**decimals** | **float** | The decimal places of the NFT to mint. Defaults to 0 - which means 1 NFT will be minted.&lt;br/&gt;Value above 0 means, you are going to mint &lt;a href&#x3D;\&quot;https://developer.algorand.org/docs/get-started/tokenization/nft/#fractional-nfts\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Fractional NFTs.&lt;/a&gt;In this case value must be equal to the logarithm in base 10 of total number of units (e.g. for total &#x3D; 10, decimal will be 1) | [optional] [default to 0]
**clawback** | **string** | The address of the clawback account that can claw back holdings of the NFT | [optional]
**manager** | **string** | The address of the manager account that can manage the configuration of the NFT or burn it; specify this parameter if you want to be able to &lt;a href&#x3D;\&quot;#operation/NftBurnErc721\&quot;&gt;burn the minted NFT&lt;/a&gt; any time later | [optional]
**reserve** | **string** | The address of the reserve account that holds the reserve (non-minted) units of the NFT | [optional]
**freeze** | **string** | The address of the freeze account that is used to freeze holdings of the NFT | [optional]

[[Back to API list]](../../README.md#api-endpoints)
