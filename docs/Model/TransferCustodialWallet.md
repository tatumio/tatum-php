# TransferCustodialWallet

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | The blockchain to work with |
**custodial_address** | **string** | The gas pump address that transfers the asset; this is the address that you &lt;a href&#x3D;\&quot;#operation/PrecalculateGasPumpAddresses\&quot;&gt;precalculated&lt;/a&gt; and &lt;a href&#x3D;\&quot;#operation/ActivateGasPumpAddresses\&quot;&gt;activated&lt;/a&gt; earlier and that is assigned to a customer in your custodial application; this is not the \&quot;master address\&quot; |
**recipient** | **string** | The blockchain address that receives the asset |
**contract_type** | **float** | The type of the asset to transfer. Set &lt;code&gt;0&lt;/code&gt; for fungible tokens (ERC-20 or equivalent), &lt;code&gt;1&lt;/code&gt; for NFTs (ERC-721 or equivalent), &lt;code&gt;2&lt;/code&gt; for Multi Tokens (ERC-1155 or equivalent), or &lt;code&gt;3&lt;/code&gt; for native blockchain currencies. |
**token_address** | **string** | (Only if the asset is a fungible token, NFT, or Multi Token) The address of the token to transfer. Do not use if the asset is a native blockchain currency. | [optional]
**amount** | **string** | (Only if the asset is a fungible token, Multi Token, or native blockchain currency) The amount of the asset to transfer. Do not use if the asset is an NFT. | [optional]
**token_id** | **string** | (Only if the asset is a Multi Token or NFT) The ID of the token to transfer. Do not use if the asset is a fungible token or native blockchain currency. | [optional]
**from_private_key** | **string** | The private key of the blockchain address that owns the gas pump address (\&quot;master address\&quot;) |
**nonce** | **float** | The nonce to be set to the transfer transaction; if not present, the last known nonce will be used | [optional]
**fee** | [**\Tatum\Model\ApproveTransferCustodialWalletFee**](ApproveTransferCustodialWalletFee.md) |  | [optional]

[[Back to Index]](../index.md)
