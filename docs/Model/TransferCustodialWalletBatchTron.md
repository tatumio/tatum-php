# TransferCustodialWalletBatchTron

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | The blockchain to work with |
**custodial_address** | **string** | The gas pump address that transfers the assets; this is the address that you &lt;a href&#x3D;\&quot;#operation/PrecalculateGasPumpAddresses\&quot;&gt;precalculated&lt;/a&gt; and &lt;a href&#x3D;\&quot;#operation/ActivateGasPumpAddresses\&quot;&gt;activated&lt;/a&gt; earlier and that is assigned to a customer in your custodial application; this is not the \&quot;master address\&quot; |
**recipient** | **string[]** | The blockchain address that receives the assets |
**contract_type** | **float[]** | The type of the assets to transfer. Set &lt;code&gt;0&lt;/code&gt; for fungible tokens (ERC-20 or equivalent), &lt;code&gt;1&lt;/code&gt; for NFTs (ERC-721 or equivalent), or &lt;code&gt;3&lt;/code&gt; for native blockchain currencies. |
**token_address** | **string[]** | &lt;ul&gt; &lt;li&gt; If the assets are fungible tokens or NFTs, set this parameter to the array of the addresses of the tokens to transfer:&lt;br/&gt; &lt;code&gt;\&quot;tokenAddress\&quot;: [\&quot;0x782919AFc85eEA2cB736874225456bB5d3e242bA\&quot;,\&quot;0x74225456bB5d3e242bA782919AFc85eEA2cB7368\&quot;,...,\&quot;0x3e242bA78274225456bB52cB7368d919AFc85eEA\&quot;]&lt;/code&gt; &lt;/li&gt; &lt;li&gt; If the assets are a native blockchain currency, set this parameter to the array of zeros, a zero per currency:&lt;br/&gt; &lt;code&gt;\&quot;tokenAddress\&quot;: [\&quot;0\&quot;,\&quot;0\&quot;,...,\&quot;0\&quot;]&lt;/code&gt; &lt;/li&gt; &lt;/ul&gt; |
**amount** | **string[]** | &lt;ul&gt; &lt;li&gt; If the assets are fungible tokens or a native blockchain currency, set this parameter to the array of the amounts of the assets to transfer:&lt;br/&gt; &lt;code&gt;\&quot;amount\&quot;: [\&quot;100000\&quot;,\&quot;15000\&quot;,...,\&quot;250000\&quot;]&lt;/code&gt; &lt;/li&gt; &lt;li&gt; If the assets are NFTs, set this parameter to the array of zeros, a zero per NFT:&lt;br/&gt; &lt;code&gt;\&quot;amount\&quot;: [\&quot;0\&quot;,\&quot;0\&quot;,...,\&quot;0\&quot;]&lt;/code&gt; &lt;/li&gt; &lt;/ul&gt; |
**token_id** | **string[]** | &lt;ul&gt; &lt;li&gt; If the assets are NFTs, set this parameter to the array of the IDs of the tokens to transfer:&lt;br/&gt; &lt;code&gt;\&quot;tokenId\&quot;: [\&quot;12\&quot;,\&quot;13\&quot;,...,\&quot;24\&quot;]&lt;/code&gt;  &lt;/li&gt; &lt;li&gt; If the assets are fungible tokens or a native blockchain currency, set this parameter to the array of zeros, a zero per fungible token/currency:&lt;br/&gt; &lt;code&gt;\&quot;tokenId\&quot;: [\&quot;0\&quot;,\&quot;0\&quot;,...,\&quot;0\&quot;]&lt;/code&gt; &lt;/li&gt; &lt;/ul&gt; |
**from_private_key** | **string** | The private key of the blockchain address that owns the gas pump address (\&quot;master address\&quot;) |
**fee_limit** | **float** | The maximum amount to be paid as the gas fee (in TRX) |

[[Back to Index]](../index.md)
