# ApproveTransferCustodialWalletCeloKMS

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | The blockchain to work with |
**custodial_address** | **string** | The gas pump address that holds the asset |
**spender** | **string** | The blockchain address to allow the transfer of the asset from the gas pump address |
**contract_type** | **float** | The type of the asset to transfer. Set <code>0</code> for fungible tokens (ERC-20 or equivalent), <code>1</code> for NFTs (ERC-721 or equivalent), or <code>2</code> for Multi Tokens (ERC-1155 or equivalent). |
**token_address** | **string** | The address of the asset to transfer |
**amount** | **string** | (Only if the asset is a fungible token or Multi Token) The amount of the asset to transfer. Do not use if the asset is an NFT. | [optional]
**token_id** | **string** | (Only if the asset is a Multi Token or NFT) The ID of the token to transfer. Do not use if the asset is a fungible token. | [optional]
**signature_id** | **string** | The KMS identifier of the private key of the blockchain address that owns the gas pump address key ("master address") |
**index** | **float** | (Only if the signature ID is mnemonic-based) The index of the specific address from the mnemonic | [optional]
**fee_currency** | **string** | The currency to pay for the gas fee |
**nonce** | **float** | The nonce to be set to the transfer transaction; if not present, the last known nonce will be used | [optional]
**fee** | [**\Tatum\Model\ApproveTransferCustodialWalletFee**](ApproveTransferCustodialWalletFee.md) |  | [optional]

[[Back to Index]](../index.md)
