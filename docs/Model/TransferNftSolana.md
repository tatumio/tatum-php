# TransferNftSolana

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | The blockchain to work with |
**from** | **string** | The blockchain address to send the NFT from; this is the address that you used in the &lt;code&gt;to&lt;/code&gt; parameter in the request body of the &lt;a href&#x3D;\&quot;#operation/NftMintErc721\&quot;&gt;minting call&lt;/a&gt;; from this address, the transaction fee will be paid |
**to** | **string** | The blockchain address to send the NFT to |
**contract_address** | **string** | The blockchain address of the NFT; this is the address from the &lt;code&gt;nftAddress&lt;/code&gt; parameter returned in the response body of the &lt;a href&#x3D;\&quot;#operation/NftMintErc721\&quot;&gt;minting call&lt;/a&gt; |
**from_private_key** | **string** | The private key of the blockchain address that you are sending the NFT from (the address that you specified in the &lt;code&gt;from&lt;/code&gt; parameter) |

[[Back to API list]](../../README.md#api-endpoints)
