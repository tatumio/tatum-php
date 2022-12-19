# MintNftAlgorandAttr

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**asset_unit** | **string** | The unit name of the NFT | [optional]
**clawback** | **string** | The address of the clawback account that can claw back holdings of the NFT | [optional]
**manager** | **string** | The address of the manager account that can manage the configuration of the NFT or burn it; specify this parameter if you want to be able to &lt;a href&#x3D;\&quot;#operation/NftBurnErc721\&quot;&gt;burn the minted NFT&lt;/a&gt; any time later | [optional]
**reserve** | **string** | The address of the reserve account that holds the reserve (non-minted) units of the NFT | [optional]
**freeze** | **string** | The address of the freeze account that is used to freeze holdings of the NFT | [optional]
**total** | **float** | (For minting the a &lt;a href&#x3D;\&quot;https://developer.algorand.org/docs/get-started/tokenization/nft/#fractional-nfts\&quot; target&#x3D;\&quot;_blank\&quot;&gt;fractional NFT&lt;/a&gt;) The number of fractions that the minted NFT should be divided into&lt;br/&gt;The number must be a power of 10 and greater that 1, for example, 10, 100, 1000...&lt;br/&gt;If not set, the parameter defaults to 1, which means that one regular (not fractional) NFT will be minted. | [optional] [default to 1]
**decimals** | **float** | (For minting the NFT as a &lt;a href&#x3D;\&quot;https://developer.algorand.org/docs/get-started/tokenization/nft/#fractional-nfts\&quot; target&#x3D;\&quot;_blank\&quot;&gt;fractional NFT&lt;/a&gt;) The number of decimal places in a fraction of the minted NFT&lt;br/&gt;The number must be greater that 0 and equal to the logarithm in base 10 of the number of the fractions (see the &lt;code&gt;total&lt;/code&gt; parameter); for example, if &lt;code&gt;total&lt;/code&gt; is set to 10, &lt;code&gt;decimals&lt;/code&gt; must be set to 1.&lt;br/&gt;If not set, the parameter defaults to 0, which means that one regular (not fractional) NFT will be minted. | [optional] [default to 0]

[[Back to API list]](../../README.md#api-endpoints)
