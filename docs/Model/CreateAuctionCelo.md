# CreateAuctionCelo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | Blockchain to work with. |
**fee_currency** | **string** | The currency in which the transaction fee will be paid |
**contract_address** | **string** | Address of the auction smart contract. |
**nft_address** | **string** | Address of the NFT asset to sell smart contract. |
**seller** | **string** | Address of the seller of the NFT asset. |
**erc20_address** | **string** | Optional address of the ERC20 token, which will be used as a selling currency of the NFT. | [optional]
**id** | **string** | ID of the auction. It's up to the developer to generate unique ID |
**amount** | **string** | Amount of the assets to be sent. For ERC-721 tokens, enter 1. | [optional]
**token_id** | **string** | ID of token, if transaction is for ERC-721 or ERC-1155. |
**ended_at** | **float** | Last block, where auction accepts bids. |
**is_erc721** | **bool** | True if asset is NFT of type ERC721, false if ERC1155. |
**from_private_key** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**nonce** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**fee** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]

[[Back to Index]](../index.md)
