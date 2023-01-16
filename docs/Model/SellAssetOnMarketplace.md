# Model/SellAssetOnMarketplace

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. |
**getContractAddress()** | **string** | Address of the marketplace smart contract. |
**getNftAddress()** | **string** | Address of the NFT asset to sell smart contract. |
**getSeller()** | **string** | Address of the seller of the NFT asset. |
**getErc20Address()** | **string** | Optional address of the ERC20 token, which will be used as a selling currency of the NFT. | [optional]
**getListingId()** | **string** | ID of the listing. It's up to the developer to generate unique ID |
**getAmount()** | **string** | Amount of the assets to be sent. For ERC-721 tokens, enter amount only in case of native currency cashback. | [optional]
**getTokenId()** | **string** | ID of token, if transaction is for ERC-721 or ERC-1155. |
**getPrice()** | **string** | Price of the asset to sell. Marketplace fee will be obtained on top of this price. |
**getIsErc721()** | **bool** | True if asset is NFT of type ERC721, false if ERC1155. |
**getFromPrivateKey()** | **string** | The private key of the seller's blockchain address |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]

[[Back to Index]](../index.md)
