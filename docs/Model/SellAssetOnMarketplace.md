# SellAssetOnMarketplace

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | Blockchain to work with. |
**contract_address** | **string** | Address of the marketplace smart contract. |
**nft_address** | **string** | Address of the NFT asset to sell smart contract. |
**seller** | **string** | Address of the seller of the NFT asset. |
**erc20_address** | **string** | Optional address of the ERC20 token, which will be used as a selling currency of the NFT. | [optional]
**listing_id** | **string** | ID of the listing. It&#39;s up to the developer to generate unique ID |
**amount** | **string** | Amount of the assets to be sent. For ERC-721 tokens, enter amount only in case of native currency cashback. | [optional]
**token_id** | **string** | ID of token, if transaction is for ERC-721 or ERC-1155. |
**price** | **string** | Price of the asset to sell. Marketplace fee will be obtained on top of this price. |
**is_erc721** | **bool** | True if asset is NFT of type ERC721, false if ERC1155. |
**from_private_key** | **string** | The private key of the seller&#39;s blockchain address |
**nonce** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**fee** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]

[[Back to Index]](../index.md)
