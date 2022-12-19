# ApproveTransferCustodialWallet

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | The blockchain to work with |
**custodial_address** | **string** | The gas pump address that holds the asset |
**spender** | **string** | The blockchain address to allow the transfer of the asset from the gas pump address |
**contract_type** | **float** | The type of the asset to transfer. Set &lt;code&gt;0&lt;/code&gt; for fungible tokens (ERC-20 or equivalent), &lt;code&gt;1&lt;/code&gt; for NFTs (ERC-721 or equivalent), or &lt;code&gt;2&lt;/code&gt; for Multi Tokens (ERC-1155 or equivalent). |
**token_address** | **string** | The address of the asset to transfer |
**amount** | **string** | (Only if the asset is a fungible token or Multi Token) The amount of the asset to transfer. Do not use if the asset is an NFT. | [optional]
**token_id** | **string** | (Only if the asset is a Multi Token or NFT) The ID of the token to transfer. Do not use if the asset is a fungible token. | [optional]
**from_private_key** | **string** | The private key of the blockchain address that owns the gas pump address (\&quot;master address\&quot;) |
**nonce** | **float** | The nonce to be set to the transfer transaction; if not present, the last known nonce will be used | [optional]
**fee** | [**\Tatum\Model\ApproveTransferCustodialWalletFee**](ApproveTransferCustodialWalletFee.md) |  | [optional]

[[Back to API list]](../../README.md#api-endpoints)
